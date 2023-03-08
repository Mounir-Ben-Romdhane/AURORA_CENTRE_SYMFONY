function disable(x)
{
    x.disabled = true ;
}
var count = 10;
function delayAction(event,x) {
    event.preventDefault();
    x.innerHTML = "Chargement : "+count;
    x.className = "btn btn-sm btn-warning";
    var timer = setInterval(function() {
        count--;
        //countdown.innerHTML = count;
        x.innerHTML = "Chargement : "+count;
        x.className = "btn btn-sm btn-warning";
        if (count === 0) {
          clearInterval(timer);
        }
    }, 1000);
    setTimeout(function() {
      // navigate to the URL specified in the href attribute
      window.location.href = event.target.href;
    }, 10000); // wait for 5 seconds before navigating
  }

  