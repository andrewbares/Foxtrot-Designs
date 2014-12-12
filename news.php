<?php

$pageTitle = "Foxtrot Designs | News"; //sets the page title
$pageCss = "css/news.css"; //sets page-specific CSS file
$selectedNavId = "news"; //options are "home", "projects", "news", "pricing", and "aboutus". This sets a class called "nav-selected" on the nav item.

include "header.php";

?>



<article class="large-4 columns">
<img src="img/news1.jpg" />
<h1>Why having an admin center is important</h1>
<h4> Wednesday, Nov 14th, 2014</h4>
<p>Description with multiple lines of text that acts as a preview of the actual story. Maybe the first three lines of the story or something. Three lines is a lot of text! Get some lorem ipsum up in this hizzle.</p>
<p>Nevermind, actually the entire article goes right here. There aren't any links to other article pages. The news is all displayed in-line, no "read more" or anything. Interesting. So in that case we will have the article text wrap around the featured image on the left. Yeah that would look pretty nice. I don't know what we would do if we wanted our articles to include images, but that shouldn't matter.</p>
<p>Our next paragraph would continue down here, wrapping around the image. It looks pretty nice, I must say. But we need a lot of content to fill this wide page. Alternatively, we could have a side bar on the right that lists all the articles and scrolls to them? Idk.</p>
<p>But regardless, this seems to work well. That's all.</p>
</article>


<hr>


<article class="large-4 columns">
<img src="img/news2.jpg"/>
<h1>The importance of supporting mobile and tablet</h1>
<h4>Friday, Nov 1st, 2014</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</article>

<hr>
    
<article class="large-4 columns">
<img src="img/news3.jpg"/>
<h1>Happy Halloween</h1>
<h4> Thursday, Oct 31st, 2014</h4>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
</article>



<?php include "footer.php"; ?>