let subMenu = document.getElementById("subMenu");
  let subMnu = document.getElementById("subMnu");

  function toggleMenu(){
    subMenu.classList.toggle("open-menue");
  }
  function togglMnu(){
    subMnu.classList.toggle("opn-menue");
  }

  var sliderMain = document.getElementById ("slider-main");
  var item = sliderMain.getElementsByClassName("item");
  function next(){
    sliderMain.append(item[0]);
  }
  function prev(){
    sliderMain.prepend(item[item.length-1])
  }


  var sliderMainOffers = document.getElementById ("slider-main-offers");
  var itemOffers = sliderMainOffers.getElementsByClassName("item-offers");
  function next1(){
    sliderMainOffers.append(itemOffers[0]);
  }
  function prev1(){
    sliderMainOffers.prepend(itemOffers[itemOffers.length-1])
  }

  var sliderMainViews= document.getElementById ("slider-main-Views");
  var itemViews = sliderMainViews.getElementsByClassName("item-Views");
  function next2(){
    sliderMainViews.append(itemViews[0]);
  }
  function prev2(){
    sliderMainViews.prepend(itemViews[itemViews.length-1]);
  }
  


/*----------CreateAcount---------------*/

const forms=document.querySelector(".forms"),
      links=document.querySelectorAll(".link");

      links.forEach(link => {
        link.addEventListener("click", e => {
          e.preventDefault();
          forms.classList.toggle("show-signin");
        })
      })

;

/*--------------researchPage---------------*/
  function show1(){
    document.getElementById('container-part1').style.display="block";
    document.getElementById('container-part2').style.display="none";
  }
  function show2(){
    document.getElementById('container-part2').style.display="block";
    document.getElementById('container-part1').style.display="none";
  };