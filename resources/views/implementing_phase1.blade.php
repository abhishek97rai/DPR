<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Phase 1</title>
    </head>

    <body>
        <div align="center">
            <h1>IN-SITU Development Format</h1>
        </div>

        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form class="form-horizontal" method="POST" action="{{ route('implementing_phase1') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('state_name') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="state_name" class="control-label">Name of the State</label>
                        </div>
                        <div class="col-md-8">
                            <input id="state_name" type="text" class="form-control" name="state_name" value="{{ old('state_name') }}" required autofocus>

                            @if ($errors->has('state_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('state_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('city_name') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="city_name" class="control-label">Name of the City</label>
                        </div>
                        <div class="col-md-8">
                            <input id="city_name" type="text" class="form-control" name="city_name" value="{{ old('city_name') }}" required>

                            @if ($errors->has('city_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('city_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('slum_name') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="slum_name" class="control-label">Name of the Slum</label>
                        </div>
                        <div class="col-md-8">
                            <input id="slum_name" type="text" class="form-control" name="slum_name" value="{{ old('slum_name') }}" required>

                            @if ($errors->has('slum_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('slum_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('project_name') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="project_name" class="control-label">Project Name</label>
                        </div>
                        <div class="col-md-8">
                            <input id="project_name" type="text" class="form-control" name="project_name" value="{{ old('project_name') }}" required>

                            @if ($errors->has('project_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('project_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('project_code') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="project_code" class="control-label">Project Code</label>
                        </div>
                        <div class="col-md-8">
                            <input id="project_code" type="text" class="form-control" name="project_code" value="{{ old('project_code') }}" required>

                            @if ($errors->has('project_code'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('slum_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('nodal_agency') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="nodal_agency" class="control-label">State Level Nodal Agency</label>
                        </div>
                        <div class="col-md-8">
                            <input id="nodal_agency" type="text" class="form-control" name="nodal_agency" value="{{ old('nodal_agency') }}" required>

                            @if ($errors->has('nodal_agency'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nodal_agency') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('implementing_agency') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="implementing_agency" class="control-label">Implementing Agency (Urban</label>
                            <label for="implementing_agency" class="control-label">Local Body/ Development</label>
                            <label for="implementing_agency" class="control-label">Authority/ Housing Board/Urban</label>
                            <label for="implementing_agency" class="control-label">Improvement Trust/ Designated</label>
                            <label for="implementing_agency" class="control-label">Slum Rehabilitation Agency/</label>
                            <label for="implementing_agency" class="control-label">Private agency/ Developer)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="implementing_agency" type="text" class="form-control" name="implementing_agency" value="{{ old('implementing_agency') }}" required>

                            @if ($errors->has('implementing_agency'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('implementing_agency') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('approval_date') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="approval_date" class="control-label">Date of approval by State Level</label>
                            <label for="approval_date" class="control-label">Sanctioning and Monitoring</label>
                            <label for="approval_date" class="control-label">Committee (SLSMC)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="approval_date" type="text" class="form-control" name="approval_date" value="{{ old('approval_date') }}" required>

                            @if ($errors->has('approval_date'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('approval_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('project_cost') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="project_cost" class="control-label">Project Cost (Rs. In Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="project_cost" type="text" class="form-control" name="project_cost" value="{{ old('project_cost') }}" required>

                            @if ($errors->has('project_cost'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('project_cost') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('project_duration') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="project_duration" class="control-label">Project Duration (in months)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="project_duration" type="text" class="form-control" name="project_duration" value="{{ old('project_duration') }}" required>

                            @if ($errors->has('project_duration'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('project_duration') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('slum_status') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="slum" class="control-label">i) Status of Slum</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-sm-10" id="slum">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="slum_status" id="slum_status_1" value="1" required>
                                    <label class="form-check-label" for="slum_status_1">
                                        1 (Notified)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="slum_status" id="slum_status_2" value="2">
                                    <label class="form-check-label" for="slum_status_2">
                                        2 (Recognised)
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="slum_status" id="slum_status_3" value="3">
                                    <label class="form-check-label" for="slum_status_3">
                                        3 (Identified)
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('slum_status'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('slum_status') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('total_slum_area') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="total_slum_area" class="control-label">ii) Total slum area(Sqm.)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="total_slum_area" type="text" class="form-control" name="total_slum_area" value="{{ old('total_slum_area') }}" required>

                            @if ($errors->has('total_slum_area'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('total_slum_area') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('rehabilitation_area') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="rehabilitation_area" class="control-label">iii)Area under rehabilitation(Sqm.)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="rehabilitation_area" type="text" class="form-control" name="rehabilitation_area" value="{{ old('rehabilitation_area') }}" required>

                            @if ($errors->has('rehabilitation_area'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('rehabilitation_area') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('slum_population') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="slum_population" class="control-label">iv) Slum Population</label>
                        </div>
                        <div class="col-md-8">
                            <input id="slum_population" type="text" class="form-control" name="slum_population" value="{{ old('slum_population') }}" required>

                            @if ($errors->has('slum_population'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('slum_population') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4" align="left">
                            <label class="control-label">No. of existing slum households</label>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="row" align="center">
                                        <label for="gen" class="control-label">Gen</label>
                                    </div>
                                    <div class="row">
                                        <input id="gen" type="text" class="form-control" name="gen" value="{{ old('gen') }}" required>

                                        @if ($errors->has('gen'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('gen') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row" align="center">
                                        <label for="sc" class="control-label">SC</label>
                                    </div>
                                    <div class="row">
                                        <input id="sc" type="text" class="form-control" name="sc" value="{{ old('sc') }}" required>

                                        @if ($errors->has('sc'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('sc') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row" align="center">
                                        <label for="st" class="control-label">ST</label>
                                    </div>
                                    <div class="row">
                                        <input id="st" type="text" class="form-control" name="st" value="{{ old('st') }}" required>

                                        @if ($errors->has('st'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('st') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row" align="center">
                                        <label for="obc" class="control-label">OBC</label>
                                    </div>
                                    <div class="row">
                                        <input id="obc" type="text" class="form-control" name="obc" value="{{ old('obc') }}" required>

                                        @if ($errors->has('obc'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('obc') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row" align="center">
                                        <label for="minority" class="control-label">Minority</label>
                                    </div>
                                    <div class="row">
                                        <input id="minority" type="text" class="form-control" name="minority" value="{{ old('minority') }}" required>

                                        @if ($errors->has('minority'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('minority') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row" align="center">
                                        <label for="total_slum_household" class="control-label">Total</label>
                                    </div>
                                    <div class="row">
                                        <input id="total_slum_household" type="text" class="form-control" name="total_slum_household" value="{{ old('total_slum_household') }}" required>

                                        @if ($errors->has('total_slum_household'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('total_slum_household') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('eligible_slum') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="eligible_slum" class="control-label">No. of eligible slum households</label>
                        </div>
                        <div class="col-md-8">
                            <input id="eligible_slum" type="text" class="form-control" name="eligible_slum" value="{{ old('eligible_slum') }}" required>

                            @if ($errors->has('eligible_slum'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('eligible_slum') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('house_proposed') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="houses_proposed" class="control-label">No. of houses proposed (slum</label>
                            <label for="houses_proposed" class="control-label">rehabilitation only) with carpet</label>
                            <label for="houses_proposed" class="control-label">area</label>
                        </div>
                        <div class="col-md-8">
                            <input id="houses_proposed" type="text" class="form-control" name="houses_proposed" value="{{ old('houses_proposed') }}" required>

                            @if ($errors->has('houses_proposed'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('houses_proposed') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('selected_PMAY') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="selected_PMAY_label" class="control-label">Whether beneficiary have been</label>
                            <label for="selected_PMAY_label" class="control-label">selected as per PMAY guidelines?</label>
                            <label for="selected_PMAY_label" class="control-label">(Yes/No)</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-sm-10" id="selected_PMAY_label">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="selected_PMAY" id="selected_PMAY_Yes" value="Yes" required>
                                    <label class="form-check-label" for="selected_PMAY_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="selected_PMAY" id="selected_PMAY_No" value="No">
                                    <label class="form-check-label" for="selected_PMAY_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('selected_PMAY'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('selected_PMAY') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('private_partner_selected') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="private_partner_selected" class="control-label">Whether private partner has</label>
                            <label for="private_partner_selected" class="control-label">been selected through open</label>
                            <label for="private_partner_selected" class="control-label">competitive bidding? If yes, date</label>
                            <label for="private_partner_selected" class="control-label">of bidding</label>
                        </div>
                        <div class="col-md-8">
                            <input id="private_partner_selected" type="date" class="form-control" name="private_partner_selected" value="{{ old('private_partner_selected') }}" required>

                            @if ($errors->has('private_partner_selected'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('private_partner_selected') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('incentive_private_partner') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="incentive_private_partner" class="control-label">Incentives to Private Partner</label>
                        </div>
                        <div class="col-md-8">
                            <input id="incentive_private_partner" type="text" class="form-control" name="incentive_private_partner" value="{{ old('incentive_private_partner') }}" required>

                            @if ($errors->has('incentive_private_partner'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('incentive_private_partner') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('existing_fsi') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="existing_fsi" class="control-label">i. Existing FSI in the area</label>
                        </div>
                        <div class="col-md-8">
                            <input id="existing_fsi" type="text" class="form-control" name="existing_fsi" value="{{ old('existing_fsi') }}" required>

                            @if ($errors->has('existing_fsi'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('existing_fsi') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('provided_fsi') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="provided_fsi" class="control-label">ii. FSI provided in the project</label>
                        </div>
                        <div class="col-md-8">
                            <input id="provided_fsi" type="text" class="form-control" name="provided_fsi" value="{{ old('provided_fsi') }}" required>

                            @if ($errors->has('provided_fsi'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('provided_fsi') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('other_incentives') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="other_incentives" class="control-label">iii. Other Incentives, if any</label>
                        </div>
                        <div class="col-md-8">
                            <input id="other_incentives" type="text" class="form-control" name="other_incentives" value="{{ old('other_incentives') }}" required>

                            @if ($errors->has('other_incentives'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('other_incentives') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('goi_grant') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="goi_grant" class="control-label">i. GoI grant required (Rs. 1.0 lakh</label>
                            <label for="goi_grant" class="control-label">per eligible slum dweller) (Rs. In</label>
                            <label for="goi_grant" class="control-label">Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="goi_grant" type="text" class="form-control" name="goi_grant" value="{{ old('goi_grant') }}" required>

                            @if ($errors->has('goi_grant'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('goi_grant') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('state_grant') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="state_grant" class="control-label">ii. State grant, if any (Rs. In Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="state_grant" type="text" class="form-control" name="state_grant" value="{{ old('state_grant') }}" required>

                            @if ($errors->has('state_grant'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('state_grant') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('ulb_grant') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="ulb_grant" class="control-label">iii. ULB grant, if any (Rs. In Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="ulb_grant" type="text" class="form-control" name="ulb_grant" value="{{ old('ulb_grant') }}" required>

                            @if ($errors->has('ulb_grant'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('ulb_grant') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('beneficiary_share') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="beneficiary_share" class="control-label">iv. Beneficiary Share (Rs. In
                                Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="beneficiary_share" type="text" class="form-control" name="beneficiary_share" value="{{ old('beneficiary_share') }}" required>

                            @if ($errors->has('beneficiary_share'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('beneficiary_share') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('total_grant') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="total_grant" class="control-label">Total (Rs. In Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="total_grant" type="text" class="form-control" name="total_grant" value="{{ old('total_grant') }}" required>

                            @if ($errors->has('total_grant'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('total_grant') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('specifications') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="specifications" class="control-label">Whether technical</label>
                            <label for="specifications" class="control-label">specification/design for housing</label>
                            <label for="specifications" class="control-label">have been ensured as per Indian</label>
                            <label for="specifications" class="control-label">Standards/NBC/ State norms?</label>
                        </div>
                        <div class="col-md-8">
                            <input id="specifications" type="text" class="form-control" name="specifications" value="{{ old('specifications') }}" required>

                            @if ($errors->has('specifications'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('specifications') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('temporary') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="temporary" class="control-label">Type of temporary arrangement</label>
                            <label for="temporary" class="control-label">for beneficiaries during</label>
                            <label for="temporary" class="control-label">construction period provided in</label>
                            <label for="temporary" class="control-label">the project (Rent/Transit Shelter)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="temporary" type="text" class="form-control" name="temporary" value="{{ old('temporary') }}" required>

                            @if ($errors->has('temporary'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('temporary') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('trunk_infrastructure') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="trunk_infrastructure" class="control-label">Whether trunk infrastructure</label>
                            <label for="trunk_infrastructure" class="control-label">is existing or is being</label>
                            <label for="trunk_infrastructure" class="control-label">provided through AMRUT</label>
                            <label for="trunk_infrastructure" class="control-label">or any other scheme?</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-sm-10" id="trunk_infrastructure_label">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="trunk_infrastructure" id="trunk_infrastructure_Yes" value="Yes" required>
                                    <label class="form-check-label" for="trunk_infrastructure_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="trunk_infrastructure" id="trunk_infrastructure_No" value="No">
                                    <label class="form-check-label" for="trunk_infrastructure_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('trunk_infrastructure'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('trunk_infrastructure') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('water_supply') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="water_supply" class="control-label">Whether the provision of Civic</label>
                            <label for="water_supply" class="control-label">infrastructure has been made as</label>
                            <label for="water_supply" class="control-label">per applicable State</label>
                            <label for="water_supply" class="control-label">norms/CPHEEO norms/IS</label>
                            <label for="water_supply" class="control-label">Code/NBC?</label>
                            <label for="water_supply" class="control-label">i. Water Supply (Yes/No)</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-sm-10" id="water_supply">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="water_supply" id="water_supply_Yes" value="Yes" required>
                                    <label class="form-check-label" for="water_supply_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="water_supply" id="water_supply_No" value="No">
                                    <label class="form-check-label" for="water_supply_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('water_supply'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('water_supply') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('sewerage') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="sewerage" class="control-label">ii. Sewerage (Yes/No)</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-sm-10" id="sewerage">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sewerage" id="sewerage_Yes" value="Yes" required>
                                    <label class="form-check-label" for="sewerage_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sewerage" id="sewerage_No" value="No">
                                    <label class="form-check-label" for="sewerage_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('sewerage'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('sewerage') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('road') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="road" class="control-label">iii. Road (Yes/No)</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-sm-10" id="road">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="road" id="road_Yes" value="Yes" required>
                                    <label class="form-check-label" for="road_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="road" id="road_No" value="No">
                                    <label class="form-check-label" for="road_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('road'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('road') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('storm_water_drain') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="storm_water_drain" class="control-label">iv. Storm Water Drain (Yes/No)</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-sm-10" id="storm_water_drain">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="storm_water_drain" id="storm_water_drain_Yes" value="Yes" required>
                                    <label class="form-check-label" for="storm_water_drain_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="storm_water_drain" id="storm_water_drain_No" value="No">
                                    <label class="form-check-label" for="storm_water_drain_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('storm_water_drain'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('storm_water_drain') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('electrification') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="electrification" class="control-label">v. External Electrification(Yes/No)</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-sm-10" id="electrification">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="electrification" id="electrification_Yes" value="Yes" required>
                                    <label class="form-check-label" for="electrification_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="electrification" id="electrification_No" value="No">
                                    <label class="form-check-label" for="electrification_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('electrification'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('electrification') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('solid_waste') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="solid_waste" class="control-label">vi. Solid Waste Management</label>
                            <label for="solid_waste" class="control-label">(Yes/No)</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-sm-10" id="solid_waste">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="solid_waste" id="solid_waste_Yes" value="Yes" required>
                                    <label class="form-check-label" for="solid_waste_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="solid_waste" id="solid_waste_No" value="No">
                                    <label class="form-check-label" for="solid_waste_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('solid_waste'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('solid_waste') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('other_infrastructure') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="other_infrastructure" class="control-label">vii. Any other, specify</label>
                        </div>
                        <div class="col-md-8">
                            <input id="other_infrastructure" type="text" class="form-control" name="other_infrastructure" value="{{ old('other_infrastructure') }}" required>

                            @if ($errors->has('other_infrastructure'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('other_infrastructure') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('reasons') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="reasons" class="control-label">viii. In case, any infrastructure</label>
                            <label for="reasons" class="control-label">has not been proposed, reasons</label>
                            <label for="reasons" class="control-label">thereof</label>
                        </div>
                        <div class="col-md-8">
                            <input id="reasons" type="text" class="form-control" name="reasons" value="{{ old('reasons') }}" required>

                            @if ($errors->has('reasons'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('reasons') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('disaster') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="disaster" class="control-label">Whether disaster (earthquake,</label>
                            <label for="disaster" class="control-label">flood, cyclone, landslide etc.)</label>
                            <label for="disaster" class="control-label">resistant features have been</label>
                            <label for="disaster" class="control-label">adopted in concept, design and</label>
                            <label for="disaster" class="control-label">implementation of the project?</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-sm-10" id="disaster">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="disaster" id="disaster_Yes" value="Yes" required>
                                    <label class="form-check-label" for="disaster_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="disaster" id="disaster_No" value="No">
                                    <label class="form-check-label" for="disaster_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('disaster'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('disaster') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('quality') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="quality" class="control-label">Whether Quality Assurance is</label>
                            <label for="quality" class="control-label">part of the Project, if not, how it</label>
                            <label for="quality" class="control-label">is proposed to be ensured?</label>
                        </div>
                        <div class="col-md-8">
                            <input id="quality" type="text" class="form-control" name="quality" value="{{ old('quality') }}" required>

                            @if ($errors->has('quality'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('quality') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('o_and_m') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="o_and_m" class="control-label">Whether O&M is part of Project,</label>
                            <label for="o_and_m" class="control-label">if yes, for how many years?</label>
                        </div>
                        <div class="col-md-8">
                            <input id="o_and_m" type="text" class="form-control" name="o_and_m" value="{{ old('o_and_m') }}" required>

                            @if ($errors->has('o_and_m'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('o_and_m') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('encumbrance') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="encumbrance" class="control-label">Whether encumbrance free land</label>
                            <label for="encumbrance" class="control-label">is available for the project or</label>
                            <label for="encumbrance" class="control-label">not?</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-sm-10" id="encumbrance">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="encumbrance" id="encumbrance_Yes" value="Yes" required>
                                    <label class="form-check-label" for="encumbrance_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="encumbrance" id="encumbrance_No" value="No">
                                    <label class="form-check-label" for="encumbrance_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('encumbrance'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('encumbrance') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('innovative') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="innovative" class="control-label">Whether any innovative/cost</label>
                            <label for="innovative" class="control-label">effective/Green technology</label>
                            <label for="innovative" class="control-label">adopted in the project?</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-sm-10" id="innovative">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="innovative" id="innovative_Yes" value="Yes" required>
                                    <label class="form-check-label" for="innovative_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="innovative" id="innovative_No" value="No">
                                    <label class="form-check-label" for="innovative_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('innovative'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('innovative') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('slac_comments') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="slac_comments" class="control-label">Comments of SLAC after techno</label>
                            <label for="slac_comments" class="control-label">economic appraisal of DPR</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-sm-10" id="slac_comments">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="slac_comments" id="slac_comments_Yes" value="Yes" required>
                                    <label class="form-check-label" for="slac_comments_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="slac_comments" id="slac_comments_No" value="No">
                                    <label class="form-check-label" for="slac_comments_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('slac_comments'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('slac_comments') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('project_brief') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="project_brief" class="control-label">Project brief including any other</label>
                            <label for="project_brief" class="control-label">information ULB/State would like</label>
                            <label for="project_brief" class="control-label">to furnish</label>
                        </div>
                        <div class="col-md-8">
                            <input id="project_brief" type="text" class="form-control" name="project_brief" value="{{ old('project_brief') }}" required>

                            @if ($errors->has('project_brief'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('project_brief') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row" align="center">
                        <button class="btn btn-primary" style="margin: 20px">Save</button>
                        <button type="submit" class="btn btn-success" style="margin: 20px">Submit</button>
                    </div>

                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </body>

</html>
