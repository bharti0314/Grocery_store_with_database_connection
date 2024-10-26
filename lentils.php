<html>
    <head>
        <link rel="stylesheet" href="file1.css">
    </head>
    <header><marquee style="font-size: 30; color: orange; text-decoration: underline">Lentils</marquee></header>
    <body style="background-color:aliceblue">
        <table>
        <form>
            <tr>
                <td id="td1">
                    <nav class="nav">
                        <ul>
                            <br><li><a href="mainpag.php"><img  src="icons/home.png"/></a></li><br><br><br>
                            <li><a href=""><img  src="icons/cart.png"/></a><span class="quantity1">0</span></li><br><br><br>
                            <li><a href="addtocart.html"><img  src="icons/orders.png"/></a></li><br><br><br>
                            <li><a href=""><img  src="icons/wishlist.png"/></a></li><br><br><br>
                            <li><a href=""><img  src="icons/rewards.png"/></a></li><br><br><br>
                            <li><a href=""><img  src="icons/account.png"/></a></li><br>
                        </ul>   
                    </nav>
                </td>
                <td id="td1">
                    
                    <div class="chana_dal"><img id="item1" src="lentils/chanadal.jpeg"/><br>
                    <label id="label1">Chana Dal ₹99/kg </label><br></div>
                    <!-- <button oncli></button> -->
                    <!-- <input type="button" value="button" onclick="add('chana dal')" name="button"> -->
                    <input type="submit" value="Add to cart" id="atc"  name="chana" action="addtocart.php?id=chana"><br>
                    <img id="item1" src="lentils/greendal.jpeg"/><br>
                    <label id="label1">Green dal  ₹45/kg</label><br>
                    <input type="button" value="Add to cart" id="atc" onlick="add('chanadal')"><br>

                </td>
                <td id="td1">
                    <img id="item1" src="lentils/masoordal.jpeg"/><br>
                    <label id="label1">Masoor dal ₹80/kg</label><br>
                    <input type="button" value="Add to cart" id="atc"><br>
                    <img id="item1" src="lentils/moongdal.jpeg"/><br>
                    <label id="label1">Moong dal  ₹50/kg</label><br>
                    <input type="button" value="Add to cart" id="atc"><br>
                </td>
                <td id="td1">
                    <img id="item2" src="lentils/turdal.jpg" height="280px" width="300px" /><br><br>
                    <label id="label2">Tur dal  ₹100/kg</label><br>
                    <input type="button" value="Add to cart" id="atc"><br>
                </td>
            </tr>
            <form>
        </table>
    </body>
    <script>
    function add(val){
        <document class="getdocumentByClassName"></document> ("chana_dal").innerHTML += '<li>'+ val +'</li>';    
        
        }
</html>