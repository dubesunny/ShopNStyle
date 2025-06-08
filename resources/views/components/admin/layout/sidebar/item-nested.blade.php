 <!-- Nav Item - Utilities Collapse Menu -->
 <li class="nav-item">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
         aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fas fa-fw fa-{{$icon}}"></i>
         <span>{{$name}}</span>
     </a>
     <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
             <h6 class="collapse-header">{{$header}}</h6>
             {{$slot}}
         </div>
     </div>
 </li>
