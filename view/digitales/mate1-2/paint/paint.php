

    <link rel="Stylesheet" type="text/css" href="paint/demo/demo.css" />

 
  <!-- headend -->
<style type="text/css">
  #paint{
   
  }
  .wPaint-menu-icon-img{
        filter: brightness(4);
  }
  .wPaint-menu-holder.wPaint-menu-name-main {
     position: fixed;
  }
  .wPaint-menu-icon-name-pencil .wPaint-menu-icon-img{
  background-position: -108px 0px !important;
}
  .wPaint-menu-icon-name-clear .wPaint-menu-icon-img{
     background-position: -36px 0px !important;
}
</style>
  <div id="paint">
    <div class="">
      <!-- jQuery UI -->
      <script type="text/javascript" src="paint/lib/jquery.ui.core.1.10.3.min.js"></script>
      <script type="text/javascript" src="paint/lib/jquery.ui.widget.1.10.3.min.js"></script>
      <script type="text/javascript" src="paint/lib/jquery.ui.mouse.1.10.3.min.js"></script>
      <script type="text/javascript" src="paint/lib/jquery.ui.draggable.1.10.3.min.js"></script>
      
      <!-- wColorPicker -->
      <link rel="Stylesheet" type="text/css" href="paint/lib/wColorPicker.min.css" />
      <script type="text/javascript" src="paint/lib/wColorPicker.min.js"></script>

      <!-- wPaint -->
      <link rel="Stylesheet" type="text/css" href="paint/wPaint.min.css" />
      <script type="text/javascript" src="paint/wPaint.min.js"></script>
      <script type="text/javascript" src="paint/plugins/main/wPaint.menu.main.min.js"></script>
      <script type="text/javascript" src="paint/plugins/text/wPaint.menu.text.min.js"></script>
      <script type="text/javascript" src="paint/plugins/shapes/wPaint.menu.main.shapes.min.js"></script>
      <script type="text/javascript" src="paint/plugins/file/wPaint.menu.main.file.min.js"></script>

      <div id="wPaint" style="position:absolute; "></div>

      <!--<center style="margin-bottom: 50px;">
        <input type="button" value="toggle menu" onclick="console.log($('#wPaint').wPaint('menuOrientation')); $('#wPaint').wPaint('menuOrientation', $('#wPaint').wPaint('menuOrientation') === 'vertical' ? 'horizontal' : 'vertical');"/>
      </center>-->

      <center id="wPaint-img"></center>

      <script type="text/javascript">
        var width = window.innerWidth - 20;

        $("#wPaint").css("width", "100%");
         $("#wPaint").css("height", window.innerHeight);
          $("#wPaint").css("z-index","555");

        var images = [
          '/test/uploads/wPaint.png',
        ];

        function saveImg(image){
          var _this = this;

          $.ajax({
            type: 'POST',
            url: '/test/upload.php',
            data: {image: image},
            success: function (resp) {

              // internal function for displaying status messages in the canvas
              _this._displayStatus('Image saved successfully');

              // doesn't have to be json, can be anything
              // returned from server after upload as long
              // as it contains the path to the image url
              // or a base64 encoded png, either will work
              resp = $.parseJSON(resp);

              // update images array / object or whatever
              // is being used to keep track of the images
              // can store path or base64 here (but path is better since it's much smaller)
              images.push(resp.img);

              // do something with the image
              $('#wPaint-img').attr('src', image);
            }
          });
        }

        function loadImgBg () {

          // internal function for displaying background images modal
          // where images is an array of images (base64 or url path)
          // NOTE: that if you can't see the bg image changing it's probably
          // becasue the foregroud image is not transparent.
          this._showFileModal('bg', images);
        }

        function loadImgFg () {

          // internal function for displaying foreground images modal
          // where images is an array of images (base64 or url path)
          this._showFileModal('fg', images);
        }

        // init wPaint
        $('#wPaint').wPaint({
          menuOffsetLeft: 5,
          menuOffsetTop: 10,
          saveImg: saveImg,
          loadImgBg: loadImgBg,
          loadImgFg: loadImgFg
        });
      </script>
    </div>
  </div>