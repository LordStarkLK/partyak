
  var ven = document.getElementById("popup-1");
  var cate = document.getElementById("popup-2");
  var photo = document.getElementById("popup-3");
  var music =  document.getElementById("popup-4");
  var dance =  document.getElementById("popup-5");
  var salon =  document.getElementById("popup-6");
  var cake =  document.getElementById("popup-7");
  var deco =  document.getElementById("popup-8");
  var sound =  document.getElementById("popup-9");
  var dress =  document.getElementById("popup-10");
  var vn = document.getElementById("venu");
  var cat = document.getElementById("cat");
  var pho = document.getElementById("phot");
  var muc = document.getElementById("musi");
  var dac = document.getElementById("danc");
  var sal = document.getElementById("salo");
  var cak = document.getElementById("caku");
  var dec = document.getElementById("decor");
  var sou= document.getElementById("soun");
  var dre = document.getElementById("dres");

  var vBtn = document.getElementById("venue");
  var cBtn = document.getElementById("catering");
  var pBtn = document.getElementById("photo");
  var mBtn =  document.getElementById("music");
  var dBtn =  document.getElementById("dance");
  var sBtn =  document.getElementById("salon");
  var caBtn =  document.getElementById("cake");
  var deBtn =  document.getElementById("deco");
  var slBtn =  document.getElementById("sound");
  var dsBtn =  document.getElementById("dress");
  


  vBtn.onclick = function(){
    ven.style.display="block";
    cate.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    vn.className = "active";
    cat.className = "no";
    pho.className ="no";
    muc.className ="no";
    dac.className ="no";
    sal.className ="no";
    cak.className ="no";
    dec.className ="no";
    sou.className ="no";
    dre.className ="no";
    
  }

  cBtn.onclick = function(){
    cate.style.display="block";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    vn.className = "no";
    cat.className = "active";
    pho.className ="no";
    muc.className ="no";
    dac.className ="no";
    sal.className ="no";
    cak.className ="no";
    dec.className ="no";
    sou.className ="no";
    dre.className ="no";
  }
   
  pBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="block";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    vn.className = "no";
    cat.className = "no";
    pho.className ="active";
    muc.className ="no";
    dac.className ="no";
    sal.className ="no";
    cak.className ="no";
    dec.className ="no";
    sou.className ="no";
    dre.className ="no";
  }

  mBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="block";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    vn.className = "no";
    cat.className = "no";
    pho.className ="no";
    muc.className ="active";
    dac.className ="no";
    sal.className ="no";
    cak.className ="no";
    dec.className ="no";
    sou.className ="no";
    dre.className ="no";
  }

  dBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="block";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    vn.className = "no";
    cat.className = "no";
    pho.className ="no";
    muc.className ="no";
    dac.className ="active";
    sal.className ="no";
    cak.className ="no";
    dec.className ="no";
    sou.className ="no";
    dre.className ="no";
  }

  sBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="block";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    vn.className = "no";
    cat.className = "no";
    pho.className ="no";
    muc.className ="no";
    dac.className ="no";
    sal.className ="active";
    cak.className ="no";
    dec.className ="no";
    sou.className ="no";
    dre.className ="no";
  }

  caBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="block";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    vn.className = "no";
    cat.className = "no";
    pho.className ="no";
    muc.className ="no";
    dac.className ="no";
    sal.className ="no";
    cak.className ="active";
    dec.className ="no";
    sou.className ="no";
    dre.className ="no";
  }

  deBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="block";
    sound.style.display="none";
    dress.style.display="none";
    vn.className = "no";
    cat.className = "no";
    pho.className ="no";
    muc.className ="no";
    dac.className ="no";
    sal.className ="no";
    cak.className ="no";
    dec.className ="active";
    sou.className ="no";
    dre.className ="no";
  }

  slBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="block";
    dress.style.display="none";
    vn.className = "no";
    cat.className = "no";
    pho.className ="no";
    muc.className ="no";
    dac.className ="no";
    sal.className ="no";
    cak.className ="no";
    dec.className ="no";
    sou.className ="active";
    dre.className ="no";
  }

  dsBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="block";
    vn.className = "no";
    cat.className = "no";
    pho.className ="no";
    muc.className ="no";
    dac.className ="no";
    sal.className ="no";
    cak.className ="no";
    dec.className ="no";
    sou.className ="no";
    dre.className ="active";
  }

//   backBtn.onclick = function(){
//     cate.style.display="none";
//     ven.style.display="none";
//     photo.style.display="none";
//     music.style.display="none";
//     dance.style.display="none";
//     salon.style.display="none";
//     cake.style.display="none";
//     deco.style.display="none";
//     sound.style.display="none";
//     dress.style.display="none";
//     conent.style.display="block";
//     eventp.style.display="none";
//   }
