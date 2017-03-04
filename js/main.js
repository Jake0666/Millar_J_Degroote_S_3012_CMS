$(document).foundation();

 (function() {
  "use strict";
  console.log("works");

  var contact = document.querySelector("#scroll-contact"),
      goingUp =document.querySelector("#going-up");

      function scrollToContact() {
        TweenMax.to(window, 0.5,{scrollTo:{y:"#contact", offsetY:20}});
      }
      function toTop() {
        TweenMax.to(window, 0.5,{scrollTo:{y:"#top"}});
      }

      contact.addEventListener('click', scrollToContact, false);
      goingUp.addEventListener('click', toTop, false);

    var thumb = document.querySelectorAll(".thumb"),
      	fullImage = document.querySelector(".fullImage"),
        overlay = document.querySelector(".overlay"),
        targetImg = 1,
      	arrowLeft = document.querySelector('.arrowLeft'),
      	arrowRight = document.querySelector('.arrowRight'),
      	lightBoxClose = document.querySelector(".close"),
      	httpRequest;

        function getImage(){
        		httpRequest = new XMLHttpRequest();
        		targetImg=this.id;

        		if (!httpRequest) {
        			console.log("error");
        		}
        		imgChange();
        	}

        	function showImage() {
        		if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
        			var galData = JSON.parse(httpRequest.responseText);

        			[].forEach.call(document.querySelectorAll('.arrow'), function(item){
        				item.classList.remove('hide');
        			});

        			overlay.classList.remove('hide');
        			lightBoxClose.classList.remove("hide");

        			[].forEach.call(document.querySelectorAll('.gal'), function(item){
        				item.classList.remove('hide');
        			});
        			fullImage.src = 'images/' + galData.images_image;
        		}
        	}

        	function imgChange(){
        		httpRequest.onreadystatechange = showImage;
        		httpRequest.open('GET', 'includes/ajaxQuery.php' + '?image=' + targetImg);
        		httpRequest.send();
        	}

        	function nextPic(){
        		targetImg++;
        		imgChange();
        	}

        	function lastPic(){
        		targetImg--;
        		imgChange();
        	}

        	function closeLightBox(){
        		[].forEach.call(document.querySelectorAll('.arrow'), function(item){
        				item.classList.add('hide');
        			});

        			overlay.classList.add('hide');
        			lightBoxClose.classList.add("hide");

        			[].forEach.call(document.querySelectorAll('.gal'), function(item){
        				item.classList.add('hide');
        			});
        	}
          [].forEach.call(thumb, function(el){
          		el.addEventListener('click', getImage, false);
          	});

          	arrowRight.addEventListener("click", nextPic, false);
          	arrowLeft.addEventListener("click", lastPic, false);
          	lightBoxClose.addEventListener("click", closeLightBox, false);
})();
