@extends('layouts.app')

@section('content')
    <h2 style="text-align: center; margin-bottom: 20px; color: white;">Employee List</h2>

    <div style="text-align: right; margin-bottom: 10px;">
        <a href="{{ route('employees.create') }}" style="color: #00ffcc; font-weight: bold;">➕ Add New Employee</a>
    </div>

    @if (session('success'))
        <div style="background: #28a745; color: white; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background: rgba(255,255,255,0.1); border-radius: 12px; overflow: hidden;">
        <thead>
            <tr style="background-color: rgba(0,0,0,0.5); color: white;">
                <th style="padding: 10px;">#</th>
                <th style="padding: 10px;">First Name</th>
                <th style="padding: 10px;">Last Name</th>
                <th style="padding: 10px;">Email</th>
                <th style="padding: 10px;">Phone</th>
                <th style="padding: 10px;">Department</th>
                <th style="padding: 10px;">Date Joined</th>
                <th style="padding: 10px;">Active</th>
                <th style="padding: 10px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($employees as $employee)
                <tr style="text-align: center; background-color: rgba(0,0,0,0.3); color: white;">
                    <td style="padding: 10px;">{{ $employee->id }}</td>
                    <td style="padding: 10px;">{{ $employee->FirstName }}</td>
                    <td style="padding: 10px;">{{ $employee->LastName }}</td>
                    <td style="padding: 10px;">{{ $employee->Email }}</td>
                    <td style="padding: 10px;">{{ $employee->Phone }}</td>
                    <td style="padding: 10px;">{{ $employee->Department }}</td>
                    <td style="padding: 10px;">{{ $employee->DateJoined }}</td>
                    <td style="padding: 10px;">
                        @if($employee->IsActive)
                            ✅
                        @else
                            ❌
                        @endif
                    </td>
                    <td style="padding: 10px;">
                        <a href="{{ route('employees.edit', $employee->id) }}" style="color: #ffc107;">✏️ Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" style="color: red; background: none; border: none; cursor: pointer;">
                                🗑️ Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" style="text-align: center; padding: 20px; color: white;">No employees found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
