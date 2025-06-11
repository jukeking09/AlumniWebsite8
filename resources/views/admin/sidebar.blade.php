<div class="bg-light border-right vh-100" id="sidebar-wrapper" style="width:220px; position:fixed; top:0; left:0; height:100vh; overflow-y:auto;">
    <div class="sidebar-heading text-center py-4"><strong>Admin Panel</strong></div>
    <div class="list-group list-group-flush">
        <a href="{{ route('home') }}" class="list-group-item list-group-item-action text-primary">SACSAA Home</a>
        <a href="{{ route('admin.titles.index') }}" class="list-group-item list-group-item-action">Manage Titles</a>
        <a href="{{ route('admin.country_codes.index') }}" class="list-group-item list-group-item-action">Manage Country Codes</a>
        <a href="{{ route('admin.courses.index') }}" class="list-group-item list-group-item-action">Manage Courses</a>
        <a href="{{ route('admin.departments.index') }}" class="list-group-item list-group-item-action">Manage Departments</a>
        <a href="{{ route('admin.roles.index') }}" class="list-group-item list-group-item-action">Manage Roles</a>
        <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action">Manage Users</a>
        <a href="{{ route('admin.prominent_alumni.create') }}" class="list-group-item list-group-item-action">Manage Prominent Alumni</a>
        <a href="{{ route('admin.executive_members.index') }}" class="list-group-item list-group-item-action">Manage Executive Members</a>
    </div>
</div>
<style>
    body { padding-left: 240px !important; }
    @media (max-width: 768px) {
        #sidebar-wrapper { position:static !important; width:100% !important; height:auto !important; }
        body { padding-left: 0 !important; }
    }
</style>
