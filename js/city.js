var timeout;
var color = 0;

var default_city_color = 210;
var city_color = default_city_color;

$( document ).ready(function() {
  var CVS = document.getElementById("canvas");
  var CTX = CVS.getContext("2d");

  var BKG = CTX.createLinearGradient(0, 0, 0, CVS.height*3);
  BKG.addColorStop(0, "#FFFFFF");
  BKG.addColorStop(1, "#FFFFFF");

  CVS.width = window.innerWidth/2;
  CVS.height= window.innerHeight;

  var h = CVS.height, w = CVS.width;
  var pc = w/100, ph = h/100;

  STRUCTS = []; DECORAT = [];
  STR_OPT = [30,2]; // 0 = Buildings, 1 = CityPartsDivisions

  rmx = pc*15;  rmn = pc*10; // building max and min widht
  rhx = ph*20;  rhn = ph*10; // building max and min height

  rmx2 = pc*15;  rmn2 = pc*10;
  rhx2 = ph*30;  rhn2 = ph*30;

  rmx3 = pc*15;  rmn3 = pc*10;
  rhx3 = ph*40;  rhn3 = ph*40;

  mx = 0; my = 0;
  msove = 0; dis = 0;

  for (var i = 0; i < STR_OPT[0] ; i++) { // goes by the num buildings
    rpos = Math.floor(Math.random()*w+rmx)+ -rmx;
    vel = i/STR_OPT[0]+0.5;

    if(i < STR_OPT[0]/STR_OPT[1]){
        rwid = Math.floor(Math.random() * rmx3) + rmn3;
        rheg = Math.floor(Math.random() * rhx3) + rhn3;
        mw = Math.round(rwid/40);  mh = Math.round(rheg/40);
    }else if (i < STR_OPT[0]/STR_OPT[1]*2){
        rwid = Math.floor(Math.random() * rmx2) + rmn2;
        rheg = Math.floor(Math.random() * rhx2) + rhn2;
        mw = Math.round(rwid/60);  mh = Math.round(rheg/70);
    }else{
        rwid = Math.floor(Math.random() * rmx) + rmn;
        rheg = Math.floor(Math.random() * rhx) + rhn;
        mw = Math.round(rwid/30);  mh = Math.round(rheg/50);
    }

    eww = rwid/mw; ewh = rheg/mh;
    wmv = eww/30; wmh = ewh/50;
    ww = eww-wmv*2; wh = ewh-wmh*2;
    twin = mw*mh;

    DecProp = makeDecors(rpos,h,rwid,rheg,h);

    vasylWindow = Math.floor(Math.random() * twin) + 0;
    ii=img=iw=ih=tan=lh=lw=lt= null;


    logo_ned = [ii, img, lh, lw, lt];
    StrProp = [rpos, 0, rwid, rheg , getRandomColor(), vel, logo_ned, true, 0];

    if(i == STR_OPT[0]-5){ // bridge with cars
      StrProp = [0 ,h, w, rheg/5, getRandomColor(), vel, logo_ned, true, 1];
      DecProp = [];
      for (var b = 0; b < STR_OPT[0]/STR_OPT[1] ; b++) {
          DecProp.push(Math.floor(Math.random() * w) + 0);
      }
    }


    STRUCTS.push(StrProp);
    DECORAT.push(DecProp);
  }

  var start = setInterval(function(){
    CTX.fillStyle = BKG;
    CTX.fillRect(0, 0, w, h);

    for ( var i = 0; i < STRUCTS.length; i++ ){
      v2 = STRUCTS[i]; bp = v2[0]; bh = v2[3]; bw = v2[2]; bv = v2[5]; colr = v2[4];
      decs = DECORAT[i];
      // CTX.fillStyle= 'hsl(188,' + colr[1] + '%,'+(colr[2]+i/3)+"%)"; // BUILDING COLOR


      CTX.fillStyle= 'hsl(202,50%,'+(colr[2]+i/3)+"%)"; // BUILDING COLOR

      typeBlock = v2[8];

      if(typeBlock == 1){
        CTX.fillRect(bp,v2[1],bw,-v2[3]);

        for (var car = 0; car < decs.length; car++) { /// cars ///
          carVel = decs[car];
          if(car % 2 === 0){ decs[car] += 2; if (carVel > w+w/50){decs[car] =0;}}
          else{ decs[car] -= 1; if(carVel < -w/50){decs[car] = w ;}}
          var cars_Width = w;
          CTX.fillStyle = '#B73225';
          if(w < h){ cars_Width = cars_Width*4;}
          else{ cars_Width = cars_Width*2;}
          CTX.fillRect(carVel,h-v2[3],cars_Width/50,-h/50);
        }

        continue;
      }

      v2[0] = bp + bv;
      if (bp > w) { v2[0] = -bw; }
      if (mx > bp && mx < bp+bw && my > h-bh) {
          if (msove < i) { msove = i }
      }

      CTX.fillRect( bp, h, bw ,-v2[3] );
    }

  }, 15);

});


function makeDecors(x,y,w,he, h){
  return [[ w-w/3,h-he-20,w/3,y ]];
}

function getRandomColor() {
  lum = Math.floor(Math.random() * 8) + 2;
  sat = Math.floor(Math.random() * 70) + 50;

  color = [ city_color, sat, lum ];
  color = [ 52,	52,	 10 ];

  return color;
}
