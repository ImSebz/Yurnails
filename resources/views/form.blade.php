<!-- resources/views/form.blade.php -->

@extends('layout')

@section('title', 'Form')

@section('content')
    <div class="form-container">
        <form action="/form" method="POST">
            @csrf
            <div class="form-top">
                <h2>Contact us</h2>
                <div class="form-top-inputs">
                    <div class="form-group">
                        <label for="first-name">First Name:</label>
                        <input type="text" id="first-name" name="first-name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name:</label>
                        <input type="text" id="last-name" name="last-name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone number:</label>
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="skills_interested">What specific skills or techniques are you most interested in learning or
                    improving?</label>
                <textarea id="skills_interested" name="skills_interested" required></textarea>
            </div>
            <div class="form-group">
                <label for="specializations_interested">Are you interested in any particular specializations within nail
                    art, such as gel nails, acrylics, or nail design?</label>
                <textarea id="specializations_interested" name="specializations_interested" required></textarea>
            </div>
            <div class="form-group">
                <label for="course_certification_importance">How important is it for you that the course provides
                    certification or accreditation upon completion?</label>
                <textarea id="course_certification_importance" name="course_certification_importance" required></textarea>
            </div>
            <div class="form-group">
                <label for="course_format_preference">Do you have any specific preferences for the format of the course,
                    such as online, in-person, or hybrid?</label>
                <textarea id="course_format_preference" name="course_format_preference" required></textarea>
            </div>
            <div class="form-group">
                <label for="support_mentorship_expectation">What level of support and mentorship do you expect from the
                    course instructors?</label>
                <textarea id="support_mentorship_expectation" name="support_mentorship_expectation" required></textarea>
            </div>
            <div class="form-group">
                <label for="course_budget">What is your budget for the course?</label>
                <div class="input-wrapper">
                    <span class="currency-symbol">£</span>
                    <input type="number" id="course_budget" name="course_budget" required min="0" step="1">
                </div>
            </div>
            <div class="form-group">
                <label for="long_term_goals">What are your long-term goals with nail art? Are you considering starting a
                    business, working in a salon, or something else?</label>
                <textarea id="long_term_goals" name="long_term_goals" required></textarea>
            </div>
            <div class="form-group">
                <label for="prior_experience">Do you have any prior experience in nail art or a related field?</label>
                <textarea id="prior_experience" name="prior_experience" required></textarea>
            </div>
            <button class="btn-send-form" type="submit">Send</button>
        </form>
    </div>

    <script>
        const phoneInput = document.getElementById('phone');
        const course_budgetInput = document.getElementById('course_budget');

        phoneInput.addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        course_budgetInput.addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>
@endsection
