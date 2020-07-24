            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{auth()->guard('admin')->user()->img}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{auth()->guard('admin')->user()->name}}</h2>
              </div>
            </div>
