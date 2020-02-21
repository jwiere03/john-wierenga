<?php if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>John Wierenga - Grand Rapids, MI Web Developer</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48627214-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Person",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Grand Rapids",
        "addressRegion": "MI",
        "postalCode": "49512",
        "streetAddress": "3923 28th ST SE #343"
      }, 
     "image": "https://johnwierenga.com/img/JohnWierenga1.jpg,
      "jobTitle": "Web Developer, Project Manager, Consultant",
      "name": "John Wierenga",
      "alumniOf": "Baker College",
      "birthPlace": "Grand Rapids, MI",     
      "gender": "male",   
      "telephone": "616-426-9321",
      "url": "https://johnwierenga.com",
	    "sameAs" : ["www.linkedin.com/in/johnwierenga",
      "https://twitter.com/jwiere03"]
    }
    </script>
</head>

<body class="index" id="page-top">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">        
        <div class="container">
           <a class="navbar-brand" href="#page-top">Professional Web Developer</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
			 <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fa fa-bars"></i>
        </button>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <img class="img-fluid" src="img/JohnWierenga1.jpg" alt="">
            <div class="intro-text">
                <span class="name">John Wierenga</span>
                <hr class="star-light">
                <span class="skills">Web Developer - Project Manager - WordPress Expert</span>
				<span class="qoute"><br/>"When you design/develop websites for a living you have to be constantly learning. Even when you <strong>graduate with honors</strong> and complete <strong>several big projects, you are at square one in a couple of years</strong> because the looks and techniques change so much so quickly." </span>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <h2 class="text-center">Areas of Expertise</h2>
            <hr class="star-primary">
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">App Development<br/>                                
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/App-In-Play-Store-Small.jpg" alt="Screenshot of app I developed" style="border: thin solid #800020;">
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-link" href="#portfolioModal2" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">Search Engine Optimization (SEO)<br/>                                
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/search-engine-optimization-seo-screenshot-small.jpg" alt="Screenshot of my search engine optimization (SEO) work" style="border: thin solid #800020;">
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-link" href="#portfolioModal3" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                               Online Ordering System
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/Ecommerce-Restaurant-Ordering-System-Small.jpg" alt="Ecommerce system for online ordering" style="border: thin solid #800020;">
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Web and Graphic Design
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/WordPress-Slider-In-Photoshop-Small.jpg" alt="Grand Rapids Web Design" style="border: thin solid #800020;">
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-link" href="#portfolioModal5" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Web Development
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/Bootstrap-And-WordPress-On-Laptop-Small.jpg" alt="Web Development In Grand Rapids" style="border: thin solid #800020;">
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">Fixing Hacked Websites<br/>
                                                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/Fix-Hacked-WordPress-Website-Small.jpg" alt="Fix hacked WordPress website" style="border: thin solid #800020;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <h2 class="text-center">About John</h2>
            <hr class="star-light">
            <div class="row">
                <div class="col-lg-12">
                    <p>I started making websites over 15 years ago, that's a long time when you consider that the world wide web (www) was only opened to the public in 1991. I've been creating websites for more than ½ the total time that websites have been in existence.</p> 

 <p>I started doing it as a hobby, graduated magna cum laude with a degree in web development, worked as a developer and project manager for a few different web design/marketing companies and am now the lead developer, project manager, and manager of Grand Rapids Web Solutions, LLC. A web design company in Grand Rapids Michigan offering a wide array of <a href="https://grandrapidsweb.com/web-design-in-grand-rapids/" target="_blank">WordPress and bootstrap web design and development options.</a> Along with designing and developing websites, and creating my own WordPress plugins and themes, I also dabble in search engine optimization (seo), social media marketing, and general small business consultation.</p>

 <p>Besides being a driving force behind the premier web design company in the West Michigan area, I work with a branch of GRWS that offers <a href="https://wpfaith.com" target="_blank">low cost WordPress websites for churches and religious organizations</a>, I am the web manager of several websites for a Lansing based law firm, manage the marketing for my families <a href="https://wierengacc.com" target="_blank">concrete countertop</a> business, I do some miscellaneous side web design and development based side projects, and I also contribute to several <a href="https://grandrapidswp.com" target="_blank">WordPress, web design and development blogs</a>. If it is web related I have probably tried it.</p>
 

 <p>I often take on small solo projects along side of my work load with GR Web LLC so that I can learn and test new design and development techniques. While a lot of my clients are in Grand Rapids and the greater West Michigan area, I work with people all over the United States. If you need an expert web developer with years of experience and a college degree in this highly technical field, then feel free to contact me.
</p>
                </div>               
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center">Contact Me</h2>
            <hr class="star-primary">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Name</label>
                                <input class="form-control" id="name" type="text" placeholder="Name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Email Address</label>
                                <input class="form-control" id="email" type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Grand Rapids, MI 49506</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="btn-social btn-outline" href="https://www.facebook.com/grandrapidsweb" target="_blank"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>                            
                            <li class="list-inline-item">
                                <a class="btn-social btn-outline" href="http://twitter.com/jwiere03" target="_blank"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-social btn-outline" href="https://www.linkedin.com/in/johnwierenga/" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>                            
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About This Website</h3>
                        <p>This website was built using the "Freelance" open source Bootstrap theme. Contact Grand Rapids Web Solutions if you need <a href="https://grandrapidsweb.com" target="_blank">bootstrap web development help</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; <?php echo date("Y"); ?> John Wierenga 
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top hidden-lg-up">
        <a class="btn btn-primary page-scroll" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>App Development</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="img/portfolio/App-In-Play-Store.png" alt="App Creation">
                                <p>I created an ordering app for Northen Lights Deli. The app is listed on both Google Play (for Android) and iTunes (for Apple). There are several services that allow you to publish an app built out of web pages. Anyone at an intermediate web development level should be able to use one of these services to create a basic app. However, these can be quite limited. One example of this is the situation I faced on this project:<br/>
								<em>Task: when viewed on a mobile device we want the website to have a link to the app so users can download it. If someone is already using the app we don't want to "recommend" that they go download the app.</em></p>
								<p>Some people create one website just to integrate into the app and a second website for regular use. This way you can add content such as "Download our app for a better experience" on the regular website and not add it in the app version. However, now we have to create and maintain 2 versions of the website. In this case, with a lot of menu items that are constantly changing prices, this would be a lot of management. My solution? A landing page on the website that you can only get to from the app. By making sure the page isn't listed on search engines and not linking to from anywhere on the site we can ensure that only visitors from the app will visit it. We then started a browsing session on this page. After the session is started the app users can visit any page on the site as a normal visitor. We detect if the user is on the app by seeing if the session was created on the landing page if it was then we can make sure that we only display relevant content, while removing unneeded features, such as the website menu (as the app has a built in menu that works better on mobile devices). If the user doesn't have the session we know they are browsing via a browser, if the browser screen is under a certain pixel width we know they are on a mobile device but not on the app and we can recomend they download the app instead.</p>
								<p>Another issues we had:<br/>
								<em>Different links to the Android and Apple download. We don't want both links displayed at the same time.</em></p>
								<p>Using the PHP get user agent functionality we detect the device type and then give them a link Google Play if they are on an Andriod or iTunes if they are on an Apple device.</p>
								<p>Like I said it doesn't take a genius to create a basic app. However, there are so many limitations that said app may be virtually worthless if you don't have the programming and problem solving abilities to go behind the basics.</p>                                
                                <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Search Engine Optimization (SEO)</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="img/portfolio/search-engine-optimization-seo-screenshot.jpg" alt="Screen Shot Of My Search Engine Optimization (SEO) Work">
                                <p>I have been dabbling in search engine optimization (seo) almost as long as I have been creating my own sites. Even as a teenager I realized it was pointless to have a good looking website if no one ever visited it, and the number #1 way to drive in traffic is to rank high on Google.</p>
								<p>Due to my expertise in web development and project management, I just don’t have a lot of time for seo campaigns. But I still do some occasional seo work and spend time reading, watching videos, and listening to seo podcasts.</p>
								<p>I take great pride in being aware of the importance of seo and designing and developing new websites with seo in mind. I have seen some companies that designed websites in ways that hurt seo, using images to display text instead of Google bot friendly text etc… I make it a point to always design my sites in a way that is seo friendly.</p>
								<p>Another common seo mistake I try to to avoid is working to rank for the wrong search terms. Ranking #1 on Google for the wrong term is pointless. I always identify the optimal search terms for each particular client and concentrate on improving results for the particular terms. </p>
								<p>I'm currently doing some seo work for a Lansing based law firm. I will post some of my positive results when I have gotten further into the campaign.</p>                                
                                <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Online Ordering System</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="img/portfolio/Ecommerce-Restaurant-Ordering-System.jpg" alt="Restaurant-Ordering-Ecommerce">
                                <p>The name of my company is Grand Rapids Web Solutions, and that is exactly what I provide: solutions. Anyone can offer a cookie cutter WordPress website, or throw around terms like "going viral", and "social media marketing". However, very rarely do they actually understand what they are talking about. They are repeating buzzwords they read and really don't understand.</p>
								<p>I enjoy looking at a client's unique situation and coming up with a solution to their specific needs. It’s a game to me and I love competition. One good example of this is the restaurant ordering system I created for a client.</p>
								<p>	Task: Client is going live with a new website for a restaurant in 72 hours and the ordering system isn’t working. The client needs me to create a whole system to list menu and allow people to place online orders. Customers need to be able to request delivery to certain areas (with delivery charge) or pick up. They need to be able to pay online or select the option to pay in person. Need to be able to allow customers to add tips to their orders. The ordering system needs to come online an hour before the restaurant opens up and shut down 30 minutes before closing time.</p>
								<p>Solution: I added WooCommerce to the website to allow people to “buy” menu item. Created a shipping option for delivery if the address is within specific zip codes and charged a delivery fee if this option is used. Allowed payment online (via PayPal) or by cash. Added a plugin to allow users to add tips to their orders. All of this was relatively easy, a mastery of WooCommerce and an addon plugin made all of this possible. However the restaurant hours was a little tricker, I used php to program it so that if the restaurant was closed (due to the day or time) then the ability to add items to the cart or checkout were removed via unhooking them in WordPress.</p>
								<p>It's so easy to throw together a WordPress website and add a couple of extra functionalities to it by installing a couple of plugins. Often times designers, or worse, people with no web background at all think they can cobble a website together. If you want something that actually works correctly and has the functionality needed instead of an alternative option because you couldn’t find the right plugins, then you need a professional developer. Someone like me.</p>                               
                                <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Web and Graphic Design</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="img/portfolio/WordPress-Slider-In-Photoshop.jpg" alt="Screenshot of a WordPress slide in Photoshop">
                              <p>My degree is in web development and that is how I have made my living. However I do like to be well rounded and I work hard to master all aspects of creating, maintaining, and promoting websites, and that includes web design. Furthermore, I have done quite a bit of graphic design work over the years, from simple edits and crops for web images, to creating logos and even printed (hard copy) restaurant menus.</p>
<p>You can have the best web design team in the world, but the web developer is where the rubber meets the road. So often in the development phase, something is added, removed, or altered on the website. You can’t always bring a design team in to redesign for minor changes, so a developer with design skills (like me) can be invaluable to keeping the project rolling without creating an eye sore or getting to far off track of the original design vision.</p>
<p>As a project manager, I have seen some great developers who were expert coders but had to have exact mockups to reference for each and every element on every single page.If one small section was added to the website after the design team created the mockups, these developers are lost when it comes to how it should look. One of my specialties is receiving mock ups of one or two web pages and carrying that design vision over into the other pages. I once developed a website for a large company, it had over 80 pages. Due to my design capabilities, the design team only had to create 3 or 4 mockups and I was able to create 75 or so pages that matched the same design style. Being able to minimize the work required from a designer helps keep my projects under budget.</p>

                                <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Web Development</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="img/portfolio/Bootstrap-And-WordPress-On-Laptop.jpg" alt="Bootstrap and WordPress logo on laptop">
                             <p>Over the last 15+ years I have managed some successful seo campaigns, learned a thing or two about web design and even graphic design, done well in sales, and been a project manager. But it’s my web development skills that got my foot in the door (a few times) in this industry.</p> 
<p>I have my degree in web development, graduating magna cum laude and only failing to get a 4.0 in 1 single class in my major. From Perl, Visual Basic, PHP, or JavaScript programming, MySQL, to html and css, I excelled in all the classes I took.</p>  
<p>I am a first class professional when it comes to developing websites in WordPress, even creating several plugins and currently working on my own theme. Many of my competitors practice something best labeled data entry: taking text documents from clients and copy and pasting it into a WordPress site with no ability to change the look or functionality.  I can replicate virtually any website on the planet. The only limit to the functionality I can implement in your website is your budget.</p> 
<p>I have also done development work in Joomla, Big Commerce, Shopify, Zen Cart, and straight html/css often using bootstrap themes for web development. If a computer can understand it then I can likely learn it.</p>
<p>Development and coding is my profession. I often implement it in my personal life as well, programming algorithms for stock charts to help me with my hobby of stock trading. I am a versatile developer who loves creating powerful websites that serve as powerful revenue increasers for my clients.</p> 
                                <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="img/portfolio/Fix-Hacked-WordPress-Website.jpg" alt="">
                                <p>This is more of a testament to raw web development skills than anything else. However since it is becoming such a common request and such a big part of what I do, I am dedicating a special section here for the many requests I have had to fix hacked WordPress sites.</p>
<p>WordPress has a lot of benefits, unfortunately, due to its tremendous popularity with users, it is also very popular with hackers who will use WordPress sites to host phishing files and other malicious content. Often when a site gets hacked there are malicious codes hidden in the site and even if you “clean” the hacked website these can be left behind somewhere on the site. Another issue is that sometimes a site can be hacked long before you notice it, even if you rollback to a backed up version of the website it might already be compromised and you don’t even realize it. A couple of weeks later the issues resurface since the root of the problem was never addressed. These factors can make “cleaning” a hacked website very difficult.</p>
<p>One solution I frequently use is to rebuild the site from scratch using an archive site like https://archive.org/web/ as a reference to see what the site looked like before it was hacked. Because we are often using different themes and plugins than the old site, we can’t copy code verbatim. But my development skills allow me to replicate virtually any site using one of my preferred WordPress themes that I am familiar with. Because these are pixel perfect remakes or close to it, these projects don't need any design time factored into the budget so they are a little more affordable than a new website.</p>
<p>After the remake is complete I tighten down site security, blocking bots and hacking attempts so that the new website doesn’t fall victim to the same attacks as the old one. After this keeping the WordPress version, plugins, and theme updated is critical. An alternative is a <a href="https://grandrapidsweb.com" target="_blank">pure html/css website built with bootstrap</a>, these are a little less likely to be hacked, but not as flexible if you are on a low budget.</p>
</p>                            
                                <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
