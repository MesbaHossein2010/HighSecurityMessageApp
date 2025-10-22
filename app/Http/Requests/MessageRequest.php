<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // We assume the user is logged in via session
        return session()->has('user');
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required|string|max:1000',
        ];
    }

    /**
     * Custom messages for validation.
     */
    public function messages(): array
    {
        return [
            'receiver_id.required' => 'Please select a contact to send the message to.',
            'receiver_id.exists' => 'Selected contact does not exist.',
            'content.required' => 'Message content cannot be empty.',
            'content.max' => 'Message cannot exceed 1000 characters.',
        ];
    }
}
