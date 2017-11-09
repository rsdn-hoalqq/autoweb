<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class getProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cate_id' => 'required',
            'txtName' => 'required',
            'txtDescription' => 'required',
            // 'txtContent' => 'required',
            // 'image' => 'mimes:jpeg,png,gif', 
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }

    public function messages(){
        return [
            'cate_id.required' => 'Bạn chưa chọn chuyên mục',
            'txtName.required' => 'Bạn chưa nhập tên sản phẩm',
            'txtDescription.required' => 'Bạn chưa nhập mô tả sản phẩm',
            // 'txtContent.required' => 'Bạn chưa nhập chi tiết sản phẩm',
            'image.*' => 'Image không đúng định dạng',
            // 'image.mimes' => 'Image không đúng định dạng',
            // 'image.size' => 'Size quá lớn',
        ];
    }
}
