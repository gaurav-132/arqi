<div class="sidebar">
	<div class="sidebar-inner">
		<ul class="sidebar-menu">
			<li class="menu-item @if(isset($sidebar)) @if($sidebar == 'dashboard') 'active' @endif @endif">
				<a class="menu-link" href="">
					<i class="fa fa-dashboard"></i>&nbsp;&nbsp;
					<span>Dashboard</span>
				</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="{{url('/products')}}">
					<i class="fa fa-laptop"></i>&nbsp;&nbsp;
					<span>Products</span>
				</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="">
					<i class="fa fa-envelope"></i>&nbsp;&nbsp;
					<span>Mails</span>
				</a>
			</li>
			<li class="menu-item has-sub-menu enabled">
				<a class="menu-link" href="javascript:;">
					<i class="fa fa-th"></i>&nbsp;&nbsp;
					<span>Charts</span>
				</a>
				<ul class="sidebar-sub-menu enabled">
					<li class="menu-item">
						<a class="menu-link" href="">
							<i class="fa fa-dashboard"></i>&nbsp;&nbsp;
							<span>Dashboard</span>
						</a>
					</li>
					<li class="menu-item">
						<a class="menu-link" href="">
							<i class="fa fa-laptop"></i>&nbsp;&nbsp;
							<span>Graphs</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="">
					<i class="fa fa-key"></i>&nbsp;&nbsp;
					<span>Forgot Password</span>
				</a>
			</li>
			<li class="menu-item">
				<a class="menu-link" href="">
					<i class="fa fa-dashboard"></i>&nbsp;&nbsp;
					<span>Logout</span>
				</a>
			</li>
			
		</ul>
	</div>
</div>