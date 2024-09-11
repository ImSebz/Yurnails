<!-- resources/views/admin/dashboard.blade.php -->

@extends('layout')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="admin-dashboard">
        <h2>Welcome, {{ Auth::user()->name }} to the Admin Dashboard</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Skills Interested</th>
                    <th>Specializations Interested</th>
                    <th>Course Certification Importance</th>
                    <th>Course Format Preference</th>
                    <th>Support Mentorship Expectation</th>
                    <th>Course Budget</th>
                    <th>Long Term Goals</th>
                    <th>Prior Experience</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formResponses as $response)
                    <tr>
                        <td>{{ $response->name }}</td>
                        <td>{{ $response->email }}</td>
                        <td>{{ $response->phone }}</td>
                        <td>{{ $response->skills_interested }}</td>
                        <td>{{ $response->specializations_interested }}</td>
                        <td>{{ $response->course_certification_importance }}</td>
                        <td>{{ $response->course_format_preference }}</td>
                        <td>{{ $response->support_mentorship_expectation }}</td>
                        <td>{{ $response->course_budget }}</td>
                        <td>{{ $response->long_term_goals }}</td>
                        <td>{{ $response->prior_experience }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $formResponses->links('vendor.pagination.default') }}
        </div>
    </div>
@endsection
