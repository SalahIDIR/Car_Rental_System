<nav class="ts-sidebar" style="background-color: #000000;">
	<ul class="ts-sidebar-menu">
		<li><a href="dashboard.php"><i class="fa fa-dashboard" style="color: whitesmoke;"></i> Dashboard</a></li>

		<li><a href="#"><i class="fa fa-files-o" style="color: whitesmoke;"></i> Brands</a>
			<ul>
				<li><a href="create-brand.php">Create Brand</a></li>
				<li><a href="manage-brands.php">Manage Brands</a></li>
			</ul>
		</li>

		<li><a href="#"><i class="fa fa-sitemap" style="color: whitesmoke;" style="color: whitesmoke;"></i> Vehicles</a>
			<ul>
				<li><a href="post-avehical.php">Post a Vehicle</a></li>
				<li><a href="manage-vehicles.php">Manage Vehicles</a></li>
			</ul>
		</li>

		<li><a href="manage-bookings.php"><i class="fa fa-users" style="color: whitesmoke;"></i> Manage Booking</a></li>

		<li><a href="manage-conactusquery.php"><i class="fa fa-desktop" style="color: whitesmoke;"></i> Manage Contact Queries</a></li>

		<li><a href="reg-users.php"><i class="fa fa-users" style="color: whitesmoke;"></i> Registered Users</a></li>
			
		<li><a href="manage-subscribers.php"><i class="fa fa-table" style="color: whitesmoke;"></i> Manage Subscribers</a></li>

	</ul>
</nav>

<style>
.ts-sidebar {
  color: white; /* Text color for icons and links */
  transition: background-color 0.3s ease-in-out; /* Smooth transition for background color */
  background-color: #222222; /* Darker shade on hover */
  color: #ddd; 
  background: linear-gradient(to bottom, #333333 0%, #111111 100%);
}

.ts-sidebar-menu {
  list-style: none; /* Remove default list style */
  padding: 0;
  margin: 0;
}

/* Menu item styles */
.menu-item,
.submenu-item {
  display: flex;
  align-items: center;
  padding: 15px 20px;
  text-decoration: none; /* Remove underline on links */
  border-bottom: 1px solid rgba(255, 255, 255, 0.2); /* Subtle border between items */
  transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

.menu-item i,
.submenu-item i {
  margin-right: 10px; /* Spacing between icon and text */
  
}

/* Submenu styles */
.has-submenu {
  position: relative; /* Required for submenu positioning */
}

.submenu {
  display: none; /* Hide submenus by default */
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  background-color: #111111; /* Match header color */
  transition: opacity 0.3s ease-in-out;
}

.has-submenu:hover .submenu {
  display: block; /* Show submenu on hover */
  opacity: 1; /* Make submenu fully visible */
}

/* Hover effects for menu items */
.menu-item:hover,
.submenu-item:hover {
  background-color: #222222; /* Darker shade on hover */
  color: #ddd; /* Slightly lighter text color on hover for better contrast */
}

/* (Optional) Active Menu Item Style */
.menu-item.active, /* Add a class like "active" to the current page's menu item */
.submenu-item.active {
  background-color: #333333; /* Change background color for active item */
  color: #fff; /* Change text color for active item */
  font-weight: bold; /* Optionally emphasize active item with bolder font */
}

</style>
	