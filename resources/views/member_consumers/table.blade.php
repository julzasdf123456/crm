<div class="table-responsive">
    <table class="table" id="memberConsumers-table">
        <thead>
        <tr>
            <th>Membershiptype</th>
            <th>Firstname</th>
            <th>Middlename</th>
            <th>Lastname</th>
            <th>Suffix</th>
            <th>Organizationname</th>
            <th>Birthdate</th>
            <th>Sitio</th>
            <th>Barangay</th>
            <th>Town</th>
            <th>Contactnumbers</th>
            <th>Emailaddress</th>
            <th>Dateapplied</th>
            <th>Dateofpms</th>
            <th>Dateapproved</th>
            <th>Civilstatus</th>
            <th>Religion</th>
            <th>Citizenship</th>
            <th>Applicationstatus</th>
            <th>Notes</th>
            <th>Trashed</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($memberConsumers as $memberConsumers)
            <tr>
                <td>{{ $memberConsumers->MembershipType }}</td>
            <td>{{ $memberConsumers->FirstName }}</td>
            <td>{{ $memberConsumers->MiddleName }}</td>
            <td>{{ $memberConsumers->LastName }}</td>
            <td>{{ $memberConsumers->Suffix }}</td>
            <td>{{ $memberConsumers->OrganizationName }}</td>
            <td>{{ $memberConsumers->Birthdate }}</td>
            <td>{{ $memberConsumers->Sitio }}</td>
            <td>{{ $memberConsumers->Barangay }}</td>
            <td>{{ $memberConsumers->Town }}</td>
            <td>{{ $memberConsumers->ContactNumbers }}</td>
            <td>{{ $memberConsumers->EmailAddress }}</td>
            <td>{{ $memberConsumers->DateApplied }}</td>
            <td>{{ $memberConsumers->DateOfPMS }}</td>
            <td>{{ $memberConsumers->DateApproved }}</td>
            <td>{{ $memberConsumers->CivilStatus }}</td>
            <td>{{ $memberConsumers->Religion }}</td>
            <td>{{ $memberConsumers->Citizenship }}</td>
            <td>{{ $memberConsumers->ApplicationStatus }}</td>
            <td>{{ $memberConsumers->Notes }}</td>
            <td>{{ $memberConsumers->Trashed }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['memberConsumers.destroy', $memberConsumers->Id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('memberConsumers.show', [$memberConsumers->Id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('memberConsumers.edit', [$memberConsumers->Id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
