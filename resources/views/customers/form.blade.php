<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"  value="{{old('name') ?? $customer->name }} " class="form-control"/>
</div>
<div class="form-group">
    <label for="email">E-Mail:</label>
    <input type="text" name="email" id="email" value="{{ old('email') ?? $customer->email}}" class="form-control" />
</div>
<div class="form-group">
    <label for="active">Status</label>
    <select class="form-control" name="active" id="active">
        <option value="" disabled>Select customer status</option>
        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
        <option value="{{$activeOptionKey}}"{{$customer->active == '$activeOptionValue' ? 'selected' : ''}}>{{$activeOptionValue}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="company_id">Company Name</label>
    <select class="form-control" name="company_id" id="company_id">
        @foreach($companies as $company)
            <option value="{{$company->id}}"{{ $company->id == $customer->company_id ? 'selected' : '' }}>{{$company->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group d-flex flex-column" >
    <label for="image">Profile Image</label>
    <input type="file"  name="image" class="py-2">
    <div>{{$errors->first('image')}}</div>
</div>
@csrf
