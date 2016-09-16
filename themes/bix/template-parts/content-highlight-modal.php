
<!--Start of highlight-modal -->
<div class="highlight-modal">
    <input class="highlight-modal__trigger" id="highlight-modal__trigger" type="checkbox"></input>
    <label for="highlight-modal__trigger" class="fa fa-pencil-square-o" aria-hidden="true"></label>
    
    <div class="highlight-modal__overlay" role="dialog" aria-labelledby="highlight-modal__title" aria-describedby="highlight-modal_desc">
        <div class="highlight-modal__wrap">
            <label class="close" for="highlight-modal__trigger">&#10006;</label>
            <i class="fa fa-pencil"></i>
            <h4 id="highlight-modal__title">Highlight</h4>
            <p class="highlight-modal__wrap-p">Is there an interesting quote from the story that speaks to you? </p>
            <p class="highlight-modal__wrap-p">Use the highlight tool to share your thoughts </p>
          <div class="highlight-example">
            <p> Example: </p>
            <img src="<?php echo(get_template_directory_uri());?>/images/pop-up-example-image.png" alt="bix logo"/>
            <img src="<?php echo(get_template_directory_uri());?>/images/pop-up-example-image-2.png" alt="bix logo"/>
          </div>
            <h4> Share This </h4>
            <p class="highlight-modal__wrap-p"> Share this on your favourite social media page</p>
            <ul class="icons-list">
                 <li><a class="icon-size" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                 <li><a class="icon-size" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                 <li><a class="icon-size" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
           </ul>

            <button class="highlight-modal-button" href="<?php echo(get_template_directory_uri());?>thank-you-page.php" alt="bix logo"> Back To Story </button>
        </div>
    </div>

</div>
<!--End of highlight-modal -->
