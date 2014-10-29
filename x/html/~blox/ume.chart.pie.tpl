<div class="tile">
    <h2 class="tile-title">Sonix Overview</h2>
    <div class="tile-config dropdown">
        <!-- <a data-toggle="dropdown" href="#/" class="tooltips tile-menu" title="" data-original-title="Options"></a>
        <ul class="dropdown-menu pull-right text-right"> 
            <li><a href="#/">Edit</a></li>
            <li><a href="#/">Delete</a></li>
        </ul> -->
    </div>
    
    <div class="p-10">

        <div class="text-center  tile-dark" >
            <div class="pie-chart-tiny user-stat" data-percent="0">
                <span class="percent"></span>
                <span class="pie-title">G~Energy</span>
            </div>
            <div class="pie-chart-tiny user-stat" data-percent="23">
                <span class="percent"></span>
                <span class="pie-title">Hit Points</span>
            </div>
            <div class="pie-chart-tiny user-stat" data-percent="57">
                <span class="percent"></span>
                <span class="pie-title">Read</span>
            </div>
            <div class="pie-chart-tiny user-stat" data-percent="0">
                <span class="percent"></span>
                <span class="pie-title">Commented</span>
            </div>
            <div class="pie-chart-tiny user-stat" data-percent="81">
                <span class="percent"></span>
                <span class="pie-title">Invitations</span>
            </div>
            <div class="pie-chart-tiny user-stat" data-percent="0">
                <span class="percent"></span>
                <span class="pie-title">Messages</span>
            </div>
            <div class="pie-chart-tiny user-stat" data-percent="23">
                <span class="percent"></span>
                <span class="pie-title"><b>Total</b></span>
            </div> 

        </div>
    
    <script type="text/javascript">
        $(document).ready(function  () {
             $('.pie-chart-tiny.user-stat').easyPieChart({
                   easing     : 'easeOutBounce',
                   barColor   : 'rgba(255,255,255,0.75)',
                   trackColor : 'rgba(0,0,0,0.3)',
                   scaleColor : 'rgba(255,255,255,0.3)',
                   lineCap    : 'square',
                   lineWidth  : 4,
                   size       : 70,
                   animate    : 3000,
                    onStep: function(from, to, percent) {
                        $(this.el).find('.percent').text(Math.round(percent));
                    }
                });

                var chart = window.chart = $('.pie-chart-tiny.user-stat').data('easyPieChart');
                $('.pie-chart-tiny user-stat .pie-title > span').on('click', function() {
                    $(this).closest('.pie-chart-tiny.user-stat').data('easyPieChart').update(Math.random()*200-100);
                });
        })
    </script>
    </div>
</div>