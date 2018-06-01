<!DOCTYPE html>
<html>
<head>
    <title>Page not found - 404</title>
</head>
<body>
@guest
  <p>Guest - The page your looking for is not available</p>
@else
  <p>User - The page your looking for is not available</p>
@endguest

{{-- @includeFirst(['first-view-name', 'second-view-name']); --}}

{{-- @includeWhen($post->hasComments(), 'posts.comments'); --}}

{{-- @includeIf('view-name') --}}

{{-- @forelse ($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>No users</p>
@endforelse --}}

{{-- @foreach ($users as $user)
    @continue($user->type == 1)

    <li>{{ $user->name }}</li>

    @break($user->number == 5)
@endforeach --}}

{{-- @each('view.name', $jobs, 'job', 'view.empty') --}}

</body>
</html>
