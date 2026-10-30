 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Menu</li>

                 <li>
                     <a href="{{ route('dashboard') }}" class="waves-effect">
                         <i class="ri-dashboard-line"></i>
                         <span>Dashboard</span>
                     </a>
                 </li>

                 <li>
                     <a href="{{route('admin.post.index')}}" class=" waves-effect">
                         <i class="ri-calendar-2-line"></i>
                         <span>Blog</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{route('admin.categories.index')}}" class=" waves-effect">
                         <i class="ri-calendar-2-line"></i>
                         <span>Category</span>
                     </a>
                 </li>
                 {{-- contact --}}
                 <li>
                     <a href="{{route('admin.contacts.index')}}" class="waves-effect">
                         <i class="ri-phone-line"></i>
                         <span>Contact</span>
                     </a>
                 </li>
                 {{-- privacy --}}
                 <li>
                     <a href="{{route('admin.privacy.index')}}" class="waves-effect">
                         <i class="ri-shield-line"></i>
                         <span>Privacy</span>
                     </a>
                 </li>
                 {{-- terms --}}
                 <li>
                     <a href="{{route('admin.term.index')}}" class="waves-effect">
                         <i class="ri-file-text-line"></i>
                         <span>Terms & Conditions</span>
                     </a>
                 </li>
                 {{-- subscribe --}}
                 <li>
                     <a href="javascript: void(0);" class="waves-effect">
                         <i class="ri-notification-line"></i>
                         <span>Subscribe</span>
                     </a>
                 </li>
                 {{-- roles & permissions --}}
                  <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-lock-line"></i>
                         <span>Roles & Permissions</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('admin.user') }}">Users</a></li>
                         <li><a href="email-read.html">Read Email</a></li>
                     </ul>
                 </li>

             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
 <!-- Left Sidebar End -->
