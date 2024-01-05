<html> 
    <head> 
<style> 
        .menu ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .menu li {
            display: inline;
        }
        .menu a {
            color: green;
            text-decoration: none;
            padding: 10px 15px;
        }
        .menu a:hover {
            background-color: #45a049;
        }
        .categories {
            text-align: center;
            padding: 20px;
        }
        .categories h2 {
            color: #4CAF50;
        }
        .categories .facility {
            margin: 20px;
            display: inline-block;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #ccc;
            width: 300px;
            text-align: center;
        }
        .categories h1 {
            color: #4CAF50;
            font-size: 20px;
        }
        .categories img {
            width: 200px;
            height: 150px;
            margin: 10px;
        }
        .categories p {
            font-size: 16px;
        }
        .footer {
            width: 100%;
            text-align: center;
            padding: 30px 0;
            color: #3B1A1A;
            background-image: linear-gradient(rgba(4, 9, 30, 0.6), rgba(4, 9, 30, 0.6)), url(images/footerimg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .footertext h4 {
            font-size: 20px;
            color: #fff;
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        .footertext p {
            color: #fff;
            font-size: 12px;
        }
        .social ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .social li {
            display: inline;
            margin: 0 10px;
        }
        .social a img {
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<?php include('partials-front/menu.php'); ?>


<section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Facilities</h2>

            <a href="https://cwcwms.com/web/index.php/capacity/default">
                <h1>Warehouse</h1>
                <br>
                <img src="images/facilities/Warehouse.jpeg" alt="Image 1" width="300" height="200">
                <br>
                <h4>Booking a warehouse can vary depending on your location, the type of warehouse you need, and the specific requirements of your business. </h1>

            </a>
            <br>
            <br>
 
            
            <a href="https://www.mofpi.gov.in/Schemes/cold-chain">
            <h1>Cold Storage</h1>
            <br>
                <img src="images/facilities/coldstorage.jpg" alt="Image 2" width="300" height="200">
                <h4>If you're looking for cold storage solutions for vegetables, there are several options available, depending on your specific needs and location. 
                    Cold storage facilities help preserve the freshness and quality of vegetables by maintaining low temperatures and controlled humidity levels</h1>
            </a>
            <br>
            
            <a href="https://www.shiprocket.in/">
            <h1>Transport</h1>
            <br>
                <img src="images/facilities/transport.jpg" alt="Image 2" width="300" height="200">
                <h4>Using a third-party transportation system, such as a logistics or shipping company, can be a cost-effective and efficient way to move goods and products.
                     These third-party providers have expertise in transportation, which can save you time and resources. </h1>
            </a>
            

            <div class="clearfix"></div>
        </div>
    </section>

    <?php include('partials-front/footer.php'); ?>