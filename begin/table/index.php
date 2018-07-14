<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div style="text-align: center">
            <h2>HTML Table</h2>
            <button onclick="document.getElementById('display').style.display = 'block'">Show Table</button>
            <button onclick="document.getElementById('display').style.display = 'none'">Hide Table</button>
        </div>



        <div class="container">
            <img src="../image/background.jpg" alt="Cinque Terre" width = 1000px; height = 300px>
            <div class="center">
                <div id="display" class="modal">
                    <table>
                        <caption><strong>Company List</strong></caption>
                        <tr>
                            <th>Company</th>
                            <th>Contact</th>
                            <th>Country</th>
                        </tr>
                        <tr>
                            <td><a href="https://twitter.com/futterkiste" target="_blank">Alfreds Futterkiste</a></td>
                            <td>Maria Anders</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td><a href="http://www.comercialmoctezuma.com/" target="_blank">Centro comercial Moctezuma</a></td>
                            <td>Francisco Chang</td>
                            <td>Mexico</td>
                        </tr>
                        <tr>
                            <td><a href="https://www.ernst-handel.de/" target="_blank"> Ernst Handel</a></td>
                            <td>Roland Mendel</td>
                            <td>Austria</td>
                        </tr>
                        <tr>
                            <td><a href="http://www.islandtrading.bm/" target="_blank">Island Trading</a></td>
                            <td>Helen Bennett</td>
                            <td>UK</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://www.bacchuswinecellars.com/index.htm" target="_blank">
                                    Laughing Bacchus Winecellars
                                </a>
                            </td>
                            <td>Yoshi Tannamuri</td>
                            <td>Canada</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="https://www.yelp.com/biz/marr-magazzini-alimentari-riuniti-riminesi-casoria" target="_blank">
                                    Magazzini Alimentari Riuniti
                                </a>
                            </td>
                            <td>Giovanni Rovelli</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>