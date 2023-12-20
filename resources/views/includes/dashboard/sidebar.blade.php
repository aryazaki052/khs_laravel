		
		<style>
			.sidebar .nav a.active {
					background-color: rgb(216, 212, 212); /* Atur warna latar belakang sesuai kebutuhan */
			}
			
	</style>
	
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('back/profil.jpg') }}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Arya Zaki
									<span class="user-level">Admin</span>
									{{-- <span class="caret"></span> --}}
								</span>
							</a>
							<div class="clearfix"></div>

							{{-- <div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div> --}}
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a  href="{{ route('dashboard') }}"  aria-expanded="false"  class="{{ Request::is('dashboard*') ? 'active' : '' }}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								{{-- <span class="caret"></span> --}}
							</a>
							{{-- <div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="../demo1/index.html">
											<span class="sub-item">Dashboard 1</span>
										</a>
									</li>
									<li>
										<a href="../demo2/index.html">
											<span class="sub-item">Dashboard 2</span>
										</a>
									</li>
								</ul>
							</div> --}}
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item">
							<a href="{{ route('kategori.index') }}" class="{{ Request::is('kategori*') ? 'active' : '' }} ">
								<i class="fas fa-desktop"></i>
								<p >Kategori</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('artikel.index') }}" class="{{ Request::is('artikel*') ? 'active' : '' }}">
								<i class="fas fa-desktop"></i>
								<p>Artikel</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('slide.index') }}" class="{{ Request::is('slide*') ? 'active' : '' }}">
								<i class="fas fa-desktop"></i>
								<p>Slide</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('pengurus.index') }}" class="{{ Request::is('pengurus*') ? 'active' : '' }}">
								<i class="fas fa-desktop"  class="{{ Request::is('pengurus*') ? 'active' : '' }}"></i>
								<p  class="{{ Request::is('pengurus*') ? 'active' : '' }}">Kepengurusan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('proker.index') }}" class="{{ Request::is('proker*') ? 'active' : '' }}">
								<i class="fas fa-desktop"></i>
								<p>Program Kerja</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('saran.index') }}" class="{{ Request::is('saran*') ? 'active' : '' }}">
								<i class="fas fa-desktop"></i>
								<p>Saran</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('logout') }}"
								 onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
									<i class="fas fa-undo"></i>
									<p>{{ __('Logout') }}</p>
							</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
								</form>
							
					</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		{{-- <div>
			<h1>adad</h1>
		</div> --}}