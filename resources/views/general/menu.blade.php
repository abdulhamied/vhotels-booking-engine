<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul side-navigation class="nav metismenu" id="side-menu">
            <li class="nav-header">

                <div class="dropdown profile-element" dropdown>
                    <img alt="image" class="img-circle" src="img/profile_small.jpg"/>
                    <a class="dropdown-toggle" dropdown-toggle href>
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">
                                        {{$user->name}}
                                        <small> ( {{$user->type}} ) </small>
                                    </strong>
                             </span>
                                <span class="text-muted text-xs block">
                                    {{$user->company->name}}
                                    <b class="caret"></b></span>
                            </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a ui-sref="v1.profile">Profile</a></li>
                        <li><a ui-sref="contacts">Contacts</a></li>
                        <li><a ui-sref="inbox">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="../login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    vE
                </div>
            </li>

            @foreach ($menuItems as $menuItem)
              <?php
                $mainMenuCheck = true;
                if(isset($menuItem['access-levels']) && $user->type != 'superuser')
                {
                  if(
                  (in_array('*', $menuItem['access-levels'])
                  || in_array($user->type, $menuItem['access-levels'])) == false
                  )
                  {
                    $mainMenuCheck = false;
                  }
                }
               ?>
               @if($mainMenuCheck)
                <li ng-class="{active : $state.includes('{{$menuItem['url']}}')}">
                    <a <?php echo (!isset($menuItem['items']))?"ui-sref='".$menuItem['url']."'":"" ?> >
                        <i class="fa {{$menuItem['icon']}}"></i>
                        <?php if(!(isset($menuItem['items']))){ ?>
                        <span class="nav-label">{{$menuItem['name']}}</span> </a>
                        <?php }else{ ?>
                        <span class="nav-label">{{$menuItem['name']}}</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse" ng-class="{in : $state.includes('{{$menuItem['url']}}')}">
                            @foreach($menuItem['items'] as $item)

                            <?php
                              $subMenuCheck = true;
                              if(isset($item['access-levels']) && $user->type != 'superuser')
                              {
                                if(
                                (in_array('*', $item['access-levels'])
                                || in_array($user->type, $item['access-levels'])) == false
                                )
                                {
                                  $subMenuCheck = false;
                                }
                              }
                             ?>
                             @if($subMenuCheck)
                                <li ui-sref-active='active'>
                                    <a ui-sref='{{$item['url']}}'>
                                        {{$item['name']}}
                                    </a>
                                </li>
                              @endif
                            @endforeach
                        </ul>
                        <?php } ?>
                </li>
                @endif
            @endforeach

            <li ng-class="{active : $state.includes('v1.favorites')}">
                <a>
                    <i class="fa fa-heart"></i>
                    <span class="nav-label">Favourites</span> <span class="fa arrow"></span>
                </a>
                <ul ng-controller="UiFavouriteLinkController" class="nav nav-second-level collapse" ng-class="{in : $state.includes('v1.users')}">
                    <li ui-sref-active="active" ng-repeat="item in UiFavouriteLinkService.base.items" >
                        <a  href="#@{{item.link}}">
                            @{{item.title}}
                        </a>
                    </li>
                    <li >
                        <a ng-click="addToLinks()" >
                            <i class="fa fa-plus"></i>
                           Add Link
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>
</nav>
