<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

     public function rules(): array
     {
         return [
             'title' => 'required',
             'plot' => 'required',
             'imdbRating' => 'required',
             'release_date' => 'required',
             'director' => 'required',
             'duration' => 'required',
             'genre' => 'required',
             'roomDate' => 'nullable',
             'room' => 'nullable',
         ];
     }

     public function room(){
        return $this->input('room');
     }

}