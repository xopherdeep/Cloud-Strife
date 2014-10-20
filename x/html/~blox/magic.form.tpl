<form class="row form-columned" role="form" id="{$f.action|md5}" action="{$f.action}">
    {* foreach $input as $in => $put}
        <div class="{$put.div.class}">
            <!-- <input type="text" class="form-control input-sm m-b-10" placeholder="Name" value="{$user.name}"> -->
            <{$put.tag} type="{$put.type}" class="{$put.class}" placeholder="{$put.placeholder}" value="{$put.value}"></{$put.tag}>
        </div>
    {/foreach *}
    <div class="col-md-4">
        <input type="text" class="form-control input-sm m-b-10" placeholder="Name" value="{$user.name}">
    </div>
    <div class="col-md-4">
        <input type="text" class="form-control input-sm m-b-10 disabled" placeholder="Username" value="{$user.username}" disabled="true">
    </div>
    <div class="col-md-4">
        <input type="email" class="form-control input-sm m-b-10 disabled" disabled="true" placeholder="Email" value="{$user.email}">
    </div>
    <div class="clearfix"></div>
    <!-- <div class="col-md-6">
        <input type="tel" class="form-control input-sm m-b-10" placeholder="Where do you Live?">
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control input-sm m-b-10" placeholder="Where are you From?">
    </div> -->
    <!-- <div class="col-md-4">
        <input type="password" class="form-control input-sm m-b-10" placeholder="Password">
    </div> -->
    <div class="col-md-12">
        <textarea class="form-control m-b-10" placeholder="Description"></textarea>
    </div>
    <!-- <div class="col-md-10">
        <button type="submit" class="btn btn-sm">Save Profile</button>
    </div> -->
</form>