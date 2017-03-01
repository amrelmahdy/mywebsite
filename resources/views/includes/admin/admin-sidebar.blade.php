<script type="text/javascript">
	try{ace.settings.loadState('main-container')}catch(e){}
</script>

<div id="sidebar" class="sidebar responsive ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>

	<ul class="nav nav-list">
		<li {{ Request::is('admin') ? 'class=active' : '' }}>
			<a href="/admin">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>
			<b class="arrow"></b>
   		</li>
        

        <li {{ Request::is('admin/profile*') ? 'class=active' : '' }}>
			<a href="{{ url('admin/profile') }}">
				<i class="menu-icon fa fa-user"></i>
				<span class="menu-text">Profile</span>
			</a>
			<b class="arrow"></b>
		</li>


		<li {{ Request::is('admin/education*') ? 'class=active' : '' }}>
			<a href="{{ url('admin/educations') }}">
				<i class="menu-icon fa fa-book"></i>
				<span class="menu-text">Education</span>
			</a>
			<b class="arrow"></b>
		</li>

		<li {{ Request::is('admin/experiences*') ? 'class=active' : '' }}>
			<a href="{{ url('admin/experiences') }}">
				<i class="menu-icon fa fa-ravelry"></i>
				<span class="menu-text"> Experience </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li {{ Request::is('admin/speakers*') ? 'class=active' : '' }}>
			<a href="">
				<i class="menu-icon fa fa-user-o"></i>
				<span class="menu-text"> Samples </span>
			</a>

			<b class="arrow"></b>
		</li>


		<li {{ Request::is('admin/events*') || Request::is('admin/galleries*') ? 'class=active' : '' }}>
			<a href="">
				<i class="menu-icon fa fa-gift"></i>
				<span class="menu-text"> Skills </span>
			</a>

			<b class="arrow"></b>
		</li>


		<li {{ Request::is('admin/agendas*') ? 'class=active' : '' }}>
			<a href="">
				<i class="menu-icon fa fa-file-o"></i>
				<span class="menu-text"> Social </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li {{ Request::is('admin/agendas*') ? 'class=active' : '' }}>
			<a href="">
				<i class="menu-icon fa fa-file-o"></i>
				<span class="menu-text"> Statistic </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li {{ Request::is('admin/agendas*') ? 'class=active' : '' }}>
			<a href="">
				<i class="menu-icon fa fa-file-o"></i>
				<span class="menu-text"> Contact </span>
			</a>

			<b class="arrow"></b>
		</li>


		{{-- 
		
		<li {{ Request::is('admin/branches*') ? 'class=active' : '' }}>
			<a href="">
				<i class="menu-icon fa fa-sliders"></i>
				<span class="menu-text"> Slider </span>
			</a>

			<b class="arrow"></b>
		</li> --}}
{{-- 
		<li {{ Request::is('admin/galleries*') ? 'class=active' : '' }}>
			<a href="{{ route('admin.galleries.index')  }}">
				<i class="menu-icon fa fa-image fa-fw"></i>
				<span class="menu-text"> Galleries </span>
			</a>

			<b class="arrow"></b>
		</li>


 --}}
{{-- 
		<li {{ Request::is('admin/CustomerService*') ? 'class=active' : '' }}>
			<a href="">
				<i class="menu-icon fa fa-building"></i> 
				<span class="menu-text"> Company </span>
			</a>

			<b class="arrow"></b>
		</li>
 --}}

{{-- 
		<li class="">
			<a href="">
				<i class="menu-icon fa fa-bars"></i> 
				<span class="menu-text"> Menu </span>
			</a>

			<b class="arrow"></b>
		</li> --}}



		

		{{-- <li {{ Request::is('admin/providerOffices*') ? 'class=active' : '' }}>
			<a href="">
				<i class="menu-icon fa fa-building"></i>

				<span class="menu-text">
					Providers offices
				</span>
			</a>

			<b class="arrow"></b>
		</li> --}}

	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>