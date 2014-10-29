<div class="tile-light p-5 m-b-15">
    <div class="cover p-relative" style="background-image: url(img/skin-blue.jpg); height: 150px; background-size: 100%; background-position: top center;">
        <h4 class="page-title" style="position: absolute;">
            <!-- <span class="dropcap">B</span>ulletin Board  -->
            
            <span class="dropcap">{$tpl.title|substr:0:1}</span>{$tpl.title|substr:1}
            <i class="n-count animated pull-right">0</i>
        </h4>
        <!-- <img src="" class="w-100 " alt=""> -->

        <div class="profile-btn pull-left" > 
            <div class="btn-group tile input-focused"   > 


                <!-- <button type="button" class="btn btn-sm  btn-alt active disabled "><i class="fa fa-dashboard"></i> All-Seeing "I"</button> -->
                <!-- <button type="button" class="btn btn-sm btn-alt"><i class="fa fa-cog"></i> Settings</button> -->
                <!-- <button class="btn btn-alt btn-sm "><i class="icon-bubble"></i> <span>Message</span></button> -->
                <!-- <button class="btn btn-alt btn-sm "><i class="icon-user-2"></i> <span>Connect</span></button> --> 
                
                {include "~blox/ume.tpl" tpl=$tpl.bb}

                <!-- <a class="btn btn-alt btn-sm hidden-xs"> 
                    <i class=" animated pull-left">0</i>
                    Thanks
                </a>
                <a href="#/youMeOS/kinnexus" class="btn btn-alt btn-sm"> 
                    <i class="animated pull-left">0</i>
                    No Thanks
                </a> -->
                <!-- <button class="btn btn-sm hidden-xs">0 Interests</button> --> 
            </div> 
        </div>
    </div> 
</div>  