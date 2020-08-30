var log = false;
var timeout;
var color = 0;

var default_city_color = 190;
var city_color = default_city_color;

$( document ).ready(function() {


  var CVS = document.getElementById("city_animation");
  var CTX = CVS.getContext("2d");

  var BKG = CTX.createLinearGradient(0, 0, 0, CVS.height*3);
  BKG.addColorStop(0, "#FFFFFF");
  BKG.addColorStop(1, "#FFFFFF");

  CVS.width = window.innerWidth/2;
  CVS.height= window.innerHeight;

  var GAME_OPT = [false, 0]; // 0 = started, 1 = timer
  var CANV_OPT = [CVS.height,CVS.width, CVS.height/100, CVS.widht/100];

  var h = CVS.height, w = CVS.width;
  var pc = w/100, ph = h/100;

  STRUCTS = []; WINDOWS = []; DECORAT = [];
  STR_OPT = [15,2]; // 0 = Buildings, 1 = CityPartsDivisions

  rmx = pc*5;  rmn = pc*5; // building max and min widht
  rhx = ph*20;  rhn = ph*10; // building max and min height

  rmx2 = pc*15;  rmn2 = pc*10;
  rhx2 = ph*30;  rhn2 = ph*30;

  rmx3 = pc*15;  rmn3 = pc*10;
  rhx3 = ph*40;  rhn3 = ph*40;

  mx = 0; my = 0;
  msove = 0; dis = 0;

  vasylBuild =  Math.floor(Math.random() * STR_OPT[0]) + 0;

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

    onw = makeWindows(mw,mh,2);
    DecProp = makeDecors(rpos,h,rwid,rheg,h);

    vasylWindow = Math.floor(Math.random() * twin) + 0;
    ii=img=iw=ih=tan=lh=lw=lt= null;

    // if (i == STR_OPT[0]-1) {
    //     images = document.getElementById("VY");
    //     ii = true;
    //     img = images;
    //     iw = images.width;
    //     // ih = images.height;
    //     ih = images.height*3  ;
    //     tan = ih/iw;
    //     lh = tan*rwid;
    //     lw = rwid;
    //     lt = h-rheg-lh/3;
    // }

    logo_ned = [ii, img, lh, lw, lt];
    StrProp = [rpos, 0, rwid, rheg , getRandomColor(), vel, logo_ned, true, 0];

    if(i == STR_OPT[0]-5){ // bridge with cars
      StrProp = [0 ,h, w, rheg/5, getRandomColor(), vel, logo_ned, true, 1];
      DecProp = [];
      for (var b = 0; b < STR_OPT[0]/STR_OPT[1] ; b++) {
          DecProp.push(Math.floor(Math.random() * w) + 0);
      }
    }


    WinProp = [h-rheg, [mw,mh], [eww, ewh], [wmv,wmh], [ww,wh], onw];

    STRUCTS.push(StrProp);
    WINDOWS.push(WinProp);
    DECORAT.push(DecProp);
  }

  // ---------


  city = function(){
    CTX.fillStyle = BKG; CTX.fillRect(0, 0, w, h);
    GAME_OPT[1] = 0;
    if (GAME_OPT[0] == false) {
      for (var i = 0; i < STRUCTS.length; i++) {
        v2 = STRUCTS[i]; bp = v2[0]; bh = v2[3]; bw = v2[2]; bv = v2[5]; colr = v2[4];
        decs = DECORAT[i];
        CTX.fillStyle= 'hsl('+city_color+','+colr[1]+'%,'+(colr[2]+i/3)+"%)"; // BUILDING COLOR
        typeBlock = v2[8];
        if(typeBlock == 1){
          CTX.fillRect(bp,v2[1],bw,-v2[3]);

          for (var car = 0; car < decs.length; car++) { /// cars ///
            carVel = decs[car];
            if(car % 2 === 0){ decs[car] += 2; if (carVel > w+w/50){decs[car] =0;}}
            else{ decs[car] -= 1; if(carVel < -w/50){decs[car] = w ;}}


            var cars_Width = w;
            CTX.fillStyle = '#FFFFFF';
            if(w < h){ cars_Width = cars_Width*4;}
            else{ cars_Width = cars_Width*2;}


            CTX.fillRect(carVel,h-v2[3],cars_Width/50,-h/50);
          }
          continue;
        }


        v2[0] = bp + bv;
        if (bp > w) { v2[0] = -bw; }
        if (mx > bp && mx < bp+bw && my > h-bh) {if (msove < i) { msove = i }}

        CTX.fillRect(bp,h,bw,-v2[3]);

        if (GAME_OPT[1] > 0) { GAME_OPT[1] -= 0.1; addWindows(i); }

        if(i % 3 === 0){
            CTX.fillStyle = 'hsl('+city_color+','+colr[1]+'%,'+((colr[2]-1)+i/2)+"%)";
            CTX.fillRect(decs[0][0]+bp,decs[0][1],decs[0][2],decs[0][3]);
          }

         if (v2[6][0] == true) { CTX.drawImage(v2[6][1], bp, v2[6][4], v2[6][3] ,v2[6][2]); } // logo
      }

    }else {

      GAME_OPT[1] += 1;

      for (var i = 0; i < STRUCTS.length; i++) {
        if (STRUCTS[i][7]) {
          v2 = STRUCTS[i]; bp = v2[0]; bh = v2[3]; bw = v2[2]; bv = v2[5];

          v2[0] = bp + bv;
          if (bp > w) { v2[0] = -bw; }
          if (mx > bp && mx < bp+bw && my > h-bh) { if (msove < i) { msove = i }}
          colr = v2[4];
          CTX.fillStyle= 'hsl('+city_color+','+colr[1]+'%,'+colr[2]+"%)";
          CTX.fillRect(bp,h,bw,-v2[3]);

          addWindows(i);

          decs = DECORAT[i];

          if(i % 3 === 0){
              CTX.fillStyle = 'hsl('+city_color+','+colr[1]+'%,'+(colr[2]-1)+"%)";
              CTX.fillRect(decs[0][0]+bp,decs[0][1],decs[0][2],decs[0][3]);
          }

          if (v2[6][0] == true) {

            CTX.drawImage(v2[6][1], bp, v2[6][4], v2[6][3] ,v2[6][2]);

          } //logo
        }else {
          continue;
        }

      }

    }

  }

  var start = setInterval(city, 15);



});


function display_log(){
  elem = document.getElementById("log_form");
  log = !log;
  elem.style.display = log ? "block" : "none" ;
  color = log ? 175 : default_city_color;
  timeout = setInterval(gradual_collor_changing, 15);
}

gradual_collor_changing = function (){

  if (color >= city_color) {
    city_color++;
  }else {
    city_color--;
  }

  if(color == city_color){
    clearInterval(timeout);
  }

}

function makeDecors(x,y,w,he, h){
  deco = [];
  deco.push([w-w/3,h-he-20,w/3,y]);
  //deco.push([0,h-he-10,w,20]); // top building DecProp
  return deco;
}

function makeWindows(columna, rows, type){
  winds = [];
  if(type == 1){ for (var i = 0; i < rows; i++) { row_w = []; for (var x = 0; x < columna; x++) { row_w.push(Math.floor(Math.random() * 9) + 0);  }  winds.push(row_w); }  }
  if(type == 2){
      for (var i = 0; i < rows; i++) {
          row_w = [];
          for (var x = 0; x < columna; x++) {
              if(x == columna-1){
                  row_w.push(11);
                  break;
              }
              if(i % 2 === 0 ){
                  row_w.push(11);
              }else{
                  if(x % 3 === 0 ){ row_w.push(11);
                  }else{ row_w.push(Math.floor(Math.random() * 9) + 0); }
              }
          }
          winds.push(row_w);
      }
  }
  return winds;
}

function getRandomColor() {
  lum = Math.floor(Math.random() * 8) + 2;
  sat = Math.floor(Math.random() * 70) + 50;

  color = [city_color,sat,lum];
return color;
}

function addWindows(box){
  v1 = WINDOWS[box];
  x2 = STRUCTS[box][0];

  width = STRUCTS[box][2]; tip = v1[0];
  mw2 = v1[1][0]; mh2 = v1[1][1];
  eww2 = v1[2][0]; ewh2 = v1[2][1];
  wmv2 = v1[3][0]; wmh2 = v1[3][1];
  ww2 = v1[4][0]; wh2 = v1[4][1];

  CTX.fillStyle="#e67300";
  wnumb = 0;

  for (var i = 0; i < mh2; i++) {
    row_p = v1[5][i];
    for (var x = 0; x < row_p.length; x++) {
        if (row_p[x] == 11) {continue;}
      posx = x2+x*eww2+wmv2;
      posy = tip+i*ewh2+wmh2;
      pas = (i+1)*(x+1);

      if (pas < GAME_OPT[1]) {
        if (row_p[x] == 1) {CTX.fillStyle = "rgba(189, 204, 150,0.7)";}
        else if (row_p[x] == 2) {CTX.fillStyle = "rgba(117, 138, 66,0.5)";}
        else if (row_p[x] == 3) {CTX.fillStyle = "rgba(179, 197, 135,1)";}
        else if (row_p[x] == 10 ) { wnumb += 1; CTX.fillStyle = "#ffad33"; }
        else{ CTX.fillStyle="rgba(34, 89, 119,0.5)"; }

        if (click) { /// paint windows
          ra = 0;
          if (mx > posx-ww2*ra && mx < posx+ww2*(1+ra) && my > posy-wh2*ra && my < posy+wh2*(1+ra)) {
            // CTX.fillRect(mx,my,40,40);
            // CTX.fillStyle="red";
            WINDOWS[box][5][i][x] = 10;
          }
        }

        CTX.fillRect(posx,posy,ww2,wh2);
      }
    }
  }

  if (wnumb == mh2*mw2) { STRUCTS[box][7] = false; }
}
