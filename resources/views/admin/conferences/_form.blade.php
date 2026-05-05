<div class="mb-3">
    <label class="form-label">{{ __('messages.conference_title') }}</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
           value="{{ old('title', $conference->title ?? '') }}">
    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label">{{ __('messages.conference_description') }}</label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror"
              rows="4">{{ old('description', $conference->description ?? '') }}</textarea>
    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label">{{ __('messages.conference_lecturers') }}</label>
    <input type="text" name="lecturers" class="form-control @error('lecturers') is-invalid @enderror"
           value="{{ old('lecturers', $conference->lecturers ?? '') }}">
    @error('lecturers')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label">{{ __('messages.conference_date') }}</label>
    <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"
           value="{{ old('date', $conference->date ?? '') }}">
    @error('date')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label">{{ __('messages.conference_time') }}</label>
    <input type="time" name="time" class="form-control @error('time') is-invalid @enderror"
           value="{{ old('time', $conference->time ?? '') }}">
    @error('time')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label">{{ __('messages.conference_address') }}</label>
    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
           value="{{ old('address', $conference->address ?? '') }}">
    @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>