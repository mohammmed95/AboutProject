<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>About Hala</title>
    <link href="CSS/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="page">

    <div id="header">
        <div id="top-bar"><span style="font-family: 'Freestyle Script';font-size: 25px"> Find me ElseWhere</span> | <img src="images/i1.png">hussein7.hala | <img src="images/i2.png"> & <img src="images/i4.png"> Hala Raad | <img src="images/i3.jpg"> hala_raad | <img src="images/i5.png"> Halaraad</div>
        <div id="top-bar-bg"></div>
    </div>

    <div id="main-content">
        <div id="left-column">
            <div id="name">H a l a<br><br>R.Hussein</div>
            <div class="sidebar1">
                <h1>General Info.</h1>
                <div class="info">
                    <p><img src="images/icon1.png" alt="">Hala | هَالَة</p>
                    <p><img src="images/icon2.jpg" alt="">Baghdad, Iraq</p>
                    <p><img src="images/icon3.png" alt="">Nov 1, 1991</p>
                    <p><img src="images/icon4.png" alt="">Arabic, Intermediate English</p>
                </div>
            </div>

            <div>
                <h3 id="about-msg">Write, send and don't forgot to make it encourage..</h3>
                <div class="msg-box">
                    <form action="/action_page.php">
                        <label for="msg"><span style="font-size: 15px;color: black"><span style="font-weight: bold" >Message</span></label>
                        <input class="msg-input" type="text" id="msg" name="Message" placeholder="Type it ..">
                        <input class="msg-send" type="submit" value="Send">
                    </form>
                </div>
            </div>

        </div>
        <div id="right-column">
            <div class="sidebar2">
                <p id="quote">Let's meet on the path of success it is open to everyone!</p>
                <h3>Passion & Hobbies</h3>

                <?php

                $tasks =[
                    ['Some of'=>'Sport'],
                    ['Some of'=>'Reading'],
                    ['Some of'=>'Music'],
                    ['Some of'=>'Human Development'],
                    ['Some of'=>'Minesweeper'],
                ]
                ?>
                <table>
                    <tr style="background-color: #50156d;color: dimgray;font: 15px 'Freestyle Script';width: 87%;padding: 0 8px;margin: 8px 6px;display: inline-block;border-radius: 5px;">
                        <th style="font-weight: bold;font-size: 25px">Some of</th>

                    </tr>
                    <?php foreach ($tasks as $item): ?>
                        <tr>
                            <td><?php echo $item['Some of']; ?></td>

                        </tr>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
    <div id="footer">
        Copyright &copy; 2017 Hala Raad.<br/>
    </div>
</div>

</body>
</html>