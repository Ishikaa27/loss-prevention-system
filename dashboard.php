<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-hands-helping la-2x"></span> <span>AIR Trading</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="http://localhost:8501"><span class="las la-chart-area"></span>
                    <span>Chart</span></a>
                </li>
                <li>
                    <a href="BuyStock.html"><span class="las la-shopping-cart"></span>
                    <span> Buy Stock</span></a>
                </li>
                <li>
                    <a href="sell.html"><span class="las la-money-check"></span>
                    <span>Sell Stock</span></a>
                </li>
                <!-- <li>
                    <a href=""><span class="las la-user-circle"></span>
                    <span>Account</span></a>
                </li> -->
                <li>
                    <a href="about.html"><span class="las la-question-circle"></span>
                    <span>About Us</span></a>
                </li>
                <li>
                    <a href="Landing.html"><span class="las la-sign-out-alt"></span>
                    <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                    <input type="search" placeholder="Search Here" />
            </div>
            <div class="user-wrapper">
                <img src="Thumbnail2.jpg" width="40px" height="40px" alt="">
                <div>
                     
                        <?php
                        session_start();
                        echo $_SESSION['name'] ?>
                    
                   
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>9500.79</h1>
                        <span>Total Investment</span>
                    </div>
                    <div>
                        <span class="las la-dollar-sign"></span>
                    </div>
                </div>
            
                <div class="card-single">
                    <div>
                        <h1>34</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>
            </div>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Holdings</h3>
                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Company</td>
                                        <td>Quantity</td>
                                        <td>Average Cost</td>
                                        <td>Total Amount</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pinterest, Inc.</td>
                                        <td>8</td>
                                        <td>27.89</td>
                                        <td>383.12</td>
                                    </tr>
                                    <tr>
                                        <td>Nokia Corporation</td>
                                        <td>5</td>
                                        <td>5.70</td>
                                        <td>28.5</td>
                                    </tr>
                                    <tr>
                                        <td>Tesla, Inc.</td>
                                        <td>5</td>
                                        <td>1018.43</td>
                                        <td>5092.15</td>
                                    </tr>
                                    <tr>
                                        <td>Apple Inc.</td>
                                        <td>6</td>
                                        <td>149.32</td>
                                        <td>895.92</td>
                                    </tr>
                                    <tr>
                                        <td>Microsoft Corporation</td>
                                        <td>10</td>
                                        <td>310.11</td>
                                        <td>3,101.1</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>