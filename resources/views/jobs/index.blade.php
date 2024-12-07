<x-layout>
    <h1>Jobs</h1>
    <ul>
      @forelse($jobs as $job)
      <li>{{ $job->title }} -  {{ $job->description}}</li>
      @empty
      <li>No jobs found</li>
      @endforelse
    </ul>
  </x-layout>
