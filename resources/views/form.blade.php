<!-- resources/views/form.blade.php -->

@extends('layout')

@section('title', 'Form')

@section('content')
    <h2>Form</h2>
    <form action="/form" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone number:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required><br><br>

        <label for="skills_interested">What specific skills or techniques are you most interested in learning or
            improving?</label>
        <textarea id="skills_interested" name="skills_interested" required></textarea><br><br>

        <label for="specializations_interested">Are you interested in any particular specializations within nail art, such
            as gel nails, acrylics, or nail design?</label>
        <textarea id="specializations_interested" name="specializations_interested" required></textarea><br><br>

        <label for="course_certification_importance">How important is it for you that the course provides certification or
            accreditation upon completion?</label>
        <textarea id="course_certification_importance" name="course_certification_importance" required></textarea><br><br>

        <label for="course_format_preference">Do you have any specific preferences for the format of the course, such as
            online, in-person, or hybrid?</label>
        <textarea id="course_format_preference" name="course_format_preference" required></textarea><br><br>

        <label for="support_mentorship_expectation">What level of support and mentorship do you expect from the course
            instructors?</label>
        <textarea id="support_mentorship_expectation" name="support_mentorship_expectation" required></textarea><br><br>

        <label for="course_budget">What is your budget for the course?</label>
        <input type="text" id="course_budget" name="course_budget" required><br><br>

        <label for="long_term_goals">What are your long-term goals with nail art? Are you considering starting a business,
            working in a salon, or something else?</label>
        <textarea id="long_term_goals" name="long_term_goals" required></textarea><br><br>

        <label for="prior_experience">Do you have any prior experience in nail art or a related field?</label>
        <textarea id="prior_experience" name="prior_experience" required></textarea><br><br>

        <button type="submit">Send</button>
    </form>

    <script>

        const phoneInput = document.getElementById('phone');

        phoneInput.addEventListener('input', function (e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>
@endsection
