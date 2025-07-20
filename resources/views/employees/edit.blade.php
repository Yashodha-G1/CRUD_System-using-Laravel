@extends('layouts.app')

@section('content')
    <h2 style="text-align: center; color: white;">✏️ Edit Employee</h2>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST" style="max-width: 600px; margin: auto;">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label style="color: white;">First Name:</label><br>
            <input type="text" name="FirstName" value="{{ $employee->FirstName }}" required style="width: 100%; padding: 10px; border-radius: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="color: white;">Last Name:</label><br>
            <input type="text" name="LastName" value="{{ $employee->LastName }}" required style="width: 100%; padding: 10px; border-radius: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="color: white;">Email:</label><br>
            <input type="email" name="Email" value="{{ $employee->Email }}" required style="width: 100%; padding: 10px; border-radius: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="color: white;">Phone:</label><br>
            <input type="text" name="Phone" value="{{ $employee->Phone }}" required style="width: 100%; padding: 10px; border-radius: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="color: white;">Department:</label><br>
            <input type="text" name="Department" value="{{ $employee->Department }}" required style="width: 100%; padding: 10px; border-radius: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="color: white;">Date Joined:</label><br>
            <input type="date" name="DateJoined" value="{{ $employee->DateJoined }}" required style="width: 100%; padding: 10px; border-radius: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="color: white;">Is Active:</label><br>
            <select name="IsActive" required style="width: 100%; padding: 10px; border-radius: 8px;">
                <option value="1" {{ $employee->IsActive ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$employee->IsActive ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <div style="text-align: right;">
            <button type="submit" style="padding: 8px 15px; background-color: #00cc99; color: white; border: none; border-radius: 6px;">💾 Update</button>
            <a href="{{ route('employees.index') }}" style="margin-left: 10px; color: #00ffff;">⬅️ Back</a>
        </div>
    </form>
@endsection
