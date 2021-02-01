var style_el = document.createElement('style'), 
    range_el = document.querySelector('input[type=range]'), 
    pp = ['-webkit-slider-runnable-', '-moz-range-'], 
    n_pp = pp.length;



document.body.appendChild(style_el);

range_el.addEventListener('input', setTrack, false);
function setTrack () {
  var sel = '.js input[type=range]',
      str = '',
      min = this.min || 0, max = this.max || 100, 
      perc = ~~((this.value - min)/(max - min)*100);
    
  for(var i = 0; i < n_pp; i++) {
    str += sel + '::' + pp[i] + 'track{background-size:' + perc + '% 100%}';
  }
  style_el.textContent = str; 
}

setTrack.call(range_el);

let range = document.getElementById("range");
let items = document.querySelectorAll(".item");
let labels = document.querySelectorAll(".labels li");

range.addEventListener("input", selectFeatures);

function selectFeatures(){
  let rangeValue = range.value;
  let position = rangeValue / 25;

  items.forEach((item, i) => {
    item.classList.remove("ok");
    item.classList.remove("nok");
    if(i <= position){
      item.classList.add("ok")
    } else {
      item.classList.add("nok")
    }
  })
}
