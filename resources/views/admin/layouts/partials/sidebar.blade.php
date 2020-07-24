            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Database Management</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Speaker <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin.speaker.list')}}">View</a></a></li>
                      <li><a href="{{route('admin.speaker.create')}}">Add New</a></li>
                      <li><a href="{{route('admin.speaker.trashed')}}">Trashed</a></li>
                    </ul>
                  </li>
                  <li>
                      <a>
                          <i class="fa fa-edit"></i> Topics <span class="fa fa-chevron-down"></span>
                      </a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin.topics.index')}}">View</a></li>
                      <li><a href="{{route('admin.topic.create')}}">Add New</a></li>
                      <li><a href="{{route('admin.topic.trashed')}}">Trashed</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Day & Slot Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin.day.create')}}">Add New Date</a></li>
                      <li><a href="{{route('admin.slot.create')}}">Add New Slots</a></li>
                      <li><a href="{{route('admin.day.index')}}">View Dates</a></li>
                      <li><a href="{{route('admin.slots.index')}}">View Slots</a></li>
                      <li><a href="#">Swap Slots</a></li>
                      <li><a href="{{route('admin.day.trashed')}}">Trashed</a></li>
                    </ul>
                  </li>
                <li><a><i class="fa fa-desktop"></i> Ticket Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin.day.create')}}">Add New Ticket (Seat) </a></li>
                      <li><a href="{{route('admin.slot.create')}}">View All Tickets</a></li>
                      <li><a href="{{route('admin.ticket.category.create')}}">Add New Category</a></li>
                      <li><a href="{{route('admin.ticket.category.index')}}">View All Categories</a></li>
                      <li><a class="disabled" href="#">Make A Custom Booking </a></li>
                      <li><a href="{{route('admin.slots.index')}}">View Bookings</a></li>
                      <li><a href="{{route('admin.day.trashed')}}">Trashed</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">General Settings</a></li>
                      <li><a href="tables_dynamic.html">Section</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Manage Blogs</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Blogs <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin.blog.create')}}">Add New</a></li>
                      <li><a href="{{route('admin.blog.index')}}">View</a></li>
                      <li><a href="{{route('admin.blog.trashed')}}">Trashed</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
