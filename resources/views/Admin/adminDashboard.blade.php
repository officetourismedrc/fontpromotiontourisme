<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!--==================================REMIXICONS=======================================-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
      <!--=========================================================================-->
  
  
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

    <script src="https://www.gstatic.com/charts/loader.js"></script>


    <!-- google chart code  -->
    <script type="text/javascript">
        google.charts.load('current', {
          'packages':['geochart'],
        });
        google.charts.setOnLoadCallback(
                function() { // Anonymous function that calls drawChart1 and drawChart2
                    drawRegionsMap();
      });
  
        function drawRegionsMap() {
          var data = google.visualization.arrayToDataTable([
            ['Country', 'Popularity'],
            ['Germany', 200],
            ['United States', 300],
            ['Brazil', 400],
            ['Canada', 500],
            ['France', 600],
            ['RU', 700]
          ]);
  
          var options = {
            backgroundColor: '#f0efef',
            defaultColor: '#000',

          };
  
          var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
  
          chart.draw(data, options);
        }
      </script>
  
    <!-- google chart code -->

</head>
<body class="body">
    <header class="header">
        <div class="header-container container">
            <div class="logo">
                <img src="{{url('assets/images/logo.png')}}" alt="logo" class="logo-img">
            </div>
            <div class="user-auth"> 
              @auth
         <div class="header-amin__detail-name"><i class="ri-admin-fill"></i><span>{{ Auth::user()->name }}</span></div>
         <form method="POST" action="{{ route('admin.logout') }}">
            @csrf

            <x-dropdown-link :href="route('admin.logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
        @endauth</div>
        </div>
    </header>
    <main class="main">
        <div class="main-container container">
            <div class="header-header">
              <div class="header-header__time">
                <div class="header-header__spec header-header__timely">date</div>
                  <div class="header-header__daily header-header__timely">Today</div>
                  <div class="header-header__mounthly header-header__timely">Mounth</div>
                  <div class="header-header__yearly header-header__timely">Year</div>
                  <div class="header-header__total header-header__timely">Total</div>
              </div>
               <div class="header-header__container">
                    <div class="header-block">
                        <div class="header-block_content">
                            <span>4 viewers</span>
                        </div>
                    </div>
                    <div class="header-block">
                        <div class="header-block_content">
                            <span>4 viewers</span>
                        </div>
                    </div>
                    <div class="header-block">
                        <div class="header-block_content">
                            <span>4 viewers</span>
                        </div>
                    </div>
               </div>
            </div>
            <div class="side-side">
                <div class="side-side__toggle">
                  <i class="ri-menu-fill"></i>
                </div>

             <div class="side-side__container">
                <div class="side-side__close">
                    <i class="ri-close-fill"></i>
                </div>
                <div class="side-menu__top">
                    <div class="side-title"><span>Dashboard</span></div>
                    <div class="side-toggle"><i class="ri-menu-fill"></i></div>
                </div>
                  <div class="side-menu">
                    <div class="side-menu__menu">
                       <ul class="side-menu__lists">
                           <li class="side-menu__icon"><i class="ri-article-fill"></i></li>
                           <li class="side-menu__list">Articles</li>
                       </ul>
                    </div>
                    <div class="side-menu__menu">
                        <ul class="side-menu__lists">
                            <li class="side-menu__icon"><i class="ri-book-2-line"></i></li>
                            <li class="side-menu__list">Documents</li>
                        </ul>
                    </div>
                    <div class="side-menu__menu">
                        <ul class="side-menu__lists">
                            <li class="side-menu__icon"><i class="ri-question-answer-fill"></i></li>
                            <li class="side-menu__list">Faq</li>
                        </ul>
                    </div>
                  </div>
             </div>
            </div>
            <div class="main-main">
              <div class="main-main__container">
                  <div class="main_block">
                     <h2 class="section__title">Map Section</h2>
                     
                     <div class="main_block-description">
                        <div class="map-container" id="regions_div" style="width:600px; height:400px;">
                         @include('Admin.helper.word_map')
                        </div>
                     </div>
                  </div>
                  <div class="main_block">
                    <h2 class="section__title">section title</h2>
                    <div class="main_block-description">
                        
                    </div>
                  </div>
                  <div class="main_block">
                    <h2 class="section__title">section title</h2>
                    <div class="main_block-description">
                        
                    </div>
                  </div>
              </div>
            </div> 
        </div>
    </main>
    <footer class="footer">
        <div class="footer-container container">
            <span>all right reserved ONT</span>
        </div>
    </footer>

    <script src="{{url('assets/js/index.js')}}"></script>
</body>
</html>