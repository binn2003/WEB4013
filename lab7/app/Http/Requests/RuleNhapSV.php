<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'masv' => ['required', 'regex:/^PS\d{5}/'],
            'hoten' => ['required', 'min:3', 'max:20'],
            'tuoi' => 'required|integer|min:16|max:100',
            'ngaysinh' => ['required', 'regex:/\d{1,2}\/\d{1,2}\/\d{4}/'],
            'cmnd' => 'required|digits_between:9,10',
            'email' => 'email|ends_with:@fpt.edu.vn',
        ];
    }

    public function messages()
    {
        return [
            'masv.required' => 'Vui lòng nhập :attribute',
            'masv.regex' => 'Mã SV không đúng định dạng',
            'hoten.required' => 'Vui lòng nhập :attribute',
            'hoten.min' => 'Vui lòng nhập ít nhất 3 kí tự',
            'hoten.max' => 'Họ tên quá dài, Tối đa 16 kí tự',
            'tuoi.required' => 'Vui lòng nhập :attribute',
            'tuoi.integer' => 'Yêu cầu nhập số nguyên',
            'tuoi.min' => 'Yêu cầu ít nhất từ 16 tuổi',
            'tuoi.max' => 'Quá tuổi, Tối đa 100 tuổi',
            'ngaysinh.required' => 'Vui lòng nhập :attribute',
            'ngaysinh.regex' => 'Ngày sinh không đúng định dạng',
            'cmnd.required' => 'Vui lòng nhập :attribute',
            'cmnd.digits_between' => 'Yêu cầu cmnd nhập 9-10 kí tự',
            'email.email' => 'Vui lòng nhập :attribute',
            'email.ends_with' => 'Yêu cầu Email phải có đuôi @fpt.edu.vn',

        ];
    }

    public function attributes()
    {
        return [
            'masv' => 'Mã sinh viên',
            'hoten' => 'Họ tên',
            'ngaysinh' => 'Ngày sinh',
            'cmnd' => 'Số CMND',
            'tuoi' => 'Tuổi',
            'email' => 'Email',
        ];
    }
}
