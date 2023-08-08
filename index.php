

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="css/style.css">


</head>
<body>
    <nav class="navbar background">  
      <ul class="nav-list">
        <div class="logo">
            <img src="img/image2.jpg" alt="logo">
        </div>
        <li><a href="index.php"> Home </a></li>
        <li><a href="index.php"> About</a></li>
        <li><a href="index.php"> Services </a></li>
        <li><a href="index.php"> Contact</a></li>
      </ul> 
      <div class="rightnav">
        <input type="text" name="search" id="search">
      <button class="btn-sm">search</button>
    </div>
     </nav> 
     <section class="background firstsection">
    <div class="box-main">
        <div class="firsthalf">
            <p class="text-big">The future of Education is here</p>
            <p class="text-small">In this world of 7 billion people we need to educate all of them . This is the future of an educated world and we are proud to say that the Future of Education is here</p>
        <div class="button">
            <button class="btn">Subscribe</button>
            <button class="btn" onclick="location.href='https://www.youtube.com'">Watch video</button>
        </div>
        </div>
        <div class="secondhalf">
            <img src="img/image2.jpg" alt="Laptop image">
        </div>
    </div>  
    </section>  

    <section class="section">
        <div class="paras">
        <p class="sectiontag text-big">The end of your search is here</p>
       <p class="sectionsubtag text-small">However, artificiality does not necessarily have a 
        negative connotation, as it may also reflect the ability of humans to replicate forms 
        or functions arising in nature, as with an artificial heart or artificial intelligence.
         Political scientist and artificial intelligence expert Herbert A. Simon observes that 
         "some artificial things are imitations of things in nature, and the imitation may use 
         either the same basic materials as those in the natural object or quite different 
         materials.[2] Simon distinguishes between the artificial and the synthetic, the former 
         being an imitation of something found in nature (for example, an artificial sweetener 
         which generates sweetness using a formula not found in nature), and the latter being a 
         replication of something found in nature (for example, a sugar created in a laboratory 
         that is chemically indistinguishable from a naturally occurring sugar).[2] Some philosophers
          have gone further and asserted that, in a deterministic world, "everything is natural and nothing is artificial",
         because everything in the world (including everything made by humans) is a product of the physical laws of the world</p>
        </div>
        <div class="thumbnail">
            <img src="img/technology.jpg" alt="laptop image">
        </div>
    </section>

    <section class="section sec-left">
        <div class="paras">
        <p class="sectiontag text-big">Digital Marketing </p>
       <p class="sectionsubtag text-small">Digital marketing is the component of marketing that uses 
        the Internet and online-based digital technologies such as desktop computers, mobile phones 
        and other digital media and platforms to promote products and services.[2][3] Its development
         during the 1990s and 2000s changed the way brands and businesses use technology for marketing.
          As digital platforms became increasingly incorporated into marketing plans and everyday life,[4]
           and as people increasingly used digital devices instead of visiting physical shops,[5][6] digital
            marketing campaigns have become prevalent, employing combinations of search engine optimization (SEO),
             search engine marketing (SEM), content marketing, influencer marketing, content automation, campaign
              marketing, data-driven marketing, e-commerce marketing, social media marketing, social media optimization, 
              e-mail direct marketing, display advertising, e-books, and optical disks and games have become commonplace.
               Digital marketing extends to non-Internet channels that provide digital media, such as television, mobile
                phones (SMS and MMS), callbacks, and on-hold mobile ring tones.[7] The extension to non-Internet channels
                 differentiates digital marketing from online marketing</p>
        </div>
        <div class="thumbnail">
            <img src="img/digital.jpg" alt="laptop image">
        </div>
    </section>

    <section class="section">
        <div class="paras">
        <p class="sectiontag text-big">Software Development </p>
       <p class="sectionsubtag text-small">Software development is the process of conceiving, 
        specifying, designing, programming, documenting, testing, and bug fixing involved in
         creating and maintaining applications, frameworks, or other software components. 
         Software development involves writing and maintaining the source code, but in a broader
          sense, it includes all processes from the conception of the desired software through
           the final manifestation, typically in a planned and structured process often overlapping 
           with software engineering. Software development also includes research, new development,
            prototyping, modification, reuse, re-engineering, maintenance, or any other activities 
            that result in software products.
            Students of engineering learn engineering and are rarely exposed to finance or marketing.
             Students of marketing learn marketing and are rarely exposed to finance or engineering. 
             Most of us become specialists in just one area. To complicate matters, few of us meet 
             interdisciplinary people in the workforce, so there are few roles to mimic. Yet, software
              product planning is critical to the development success and absolutely requires knowledge of multiple disciplines</p>
        </div>
        <div class="thumbnail">
            <img src="img/image2.jpg" alt="laptop image">
        </div>
    </section>

    <section class="contact">
        <h2 class="text-center">Contact Us</h2>
        <div class="form">
            <form action="index.php" method="POST">
            <input class="form-type" type="text" name='name'  placeholder="Enter your name">
            <input class="form-type" type="number" name='phone'  placeholder="Enter your phone">
            <input class="form-type" type="email" name='email'  placeholder="Enter your email">
            <input class="form-type" type="password" name='password'  placeholder="Enter your password">
            <textarea class="form-type" type="text" name='text' col="30" rows="10" placeholder="Elaborate your concern"></textarea>   
            <button class="btn btn-dark">Submit</button>
            </form>
        </div>
    </section>
    <footer>
        <p class="text-footer">Copyright & 2027 All right reserved</p>
    </footer>
</body>
</html>
<?php
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("connection failed due to some issue".mysqli_connect_error());
}


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$text = $_POST['text'];

$sql="INSERT INTO `login`.`users` ( `name`, `phone`, `email`, `password`, `text`,dt)
 VALUES ( '$name', '$phone', '$email', '$password', '$text',current_timestamp());";

if($con->query($sql)==true){
    echo "successfully data inserted";
}else{
    echo "Error: ".$sql." <br>".$con->error;
}
?>
<!-- INSERT INTO `users` (`s no`, `name`, `phone`, `email`, `password`, `text`, `dt`)  -->
<!-- VALUES (NULL, 'siva', '77237', 'jndjqwb@', '2323kndk2n', 'this is the web', current_timestamp()); -->