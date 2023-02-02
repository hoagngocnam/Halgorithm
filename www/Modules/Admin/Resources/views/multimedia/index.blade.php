@extends('admin::layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.multimedia.index', ['product_id' => $product->id]) }}" method="POST"
                enctype="multipart/form-data" class="validate-form">
                @csrf
                <div class="row" id="images">
                    @if ($product->multimedia->isEmpty())
                        @for ($n = 1; $n <= 1; $n++)
                            <div class="row-input-group form-group col-md-6 element-image">
                                <label class="text-label">Hình ảnh sản phẩm {{ $n }} [jpg,
                                    png]</label>
                                <i class="feather icon-star-on icon-required"></i>
                                <button class="btn btn-danger float-right event-delete-image hide">
                                    <i class="feather icon-delete"></i>
                                </button>
                                <div class="clear"></div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="multimedia[new][]"
                                            data-type_file="image">
                                        <label class="custom-file-label">Chọn hình ảnh hoặc video</label>
                                    </div>
                                </div>
                                <div class="preview-image hide">
                                    <img style="width: 100%" src="" alt="">
                                </div>
                                <p class="error-msg">{{ $errorMessage ?? '' }}</p>
                            </div>
                        @endfor
                    @else
                        @foreach ($product->multimedia as $key => $multimedia)
                            <div class="row-input-group form-group col-md-6 element-image">
                                <label class="text-label">Hình ảnh sản phẩm {{ $key + 1 }} [jpg,
                                    png]</label>
                                <i class="feather icon-star-on icon-required"></i>
                                <button class="btn btn-danger float-right event-delete-image"
                                    data-product_image_id="{{ $multimedia->id }}">
                                    <i class="feather icon-delete"></i>
                                </button>
                                <div class="clear"></div>
                                <input type="file" class="form-control" name="multimedia[old][{{ $multimedia->id }}]"
                                    accept=".jpg, .png" data-type_file="image" />
                                <div class="preview-image">
                                    <img style="width: 100%" src="{{ asset($multimedia->path) }}"
                                        alt="Hình ảnh {{ $product->name }} số {{ $key }}">
                                </div>
                                <p class="error-msg">{{ $errorMessage ?? '' }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
                <button type="button" class="btn btn-primary font-weight-bold event-add-image">
                    <i class="feather icon-check mr-2"></i>Thêm hình ảnh
                </button>
                <button type="submit" class="btn btn-success font-weight-bold float-right">
                    <i class="feather icon-check mr-2"></i>Hoàn thành
                </button>
            </form>
        </div>
    </div>
    <div>
        {{-- <input type="hidden" id="api_product_image_delete" value="{{ route('api.product.image.delete') }}"> --}}
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            const IMAGE = 'image';
            const MIME_TYPE_IMAGE = ['image/jpeg', 'image/png'];
            const EXTENSION_IMAGE = ['jpg', 'png'];
            const API_PRODUCT_IMAGE_DELETE = $('#api_product_image_delete').val();

            // Tạo html thêm hình ảnh
            const htmlImage = (count) => {
                let html_image = '<div class="row-input-group form-group col-md-6">';
                html_image += '<label class="text-label">Hình ảnh sản phẩm ' + count + '[jpg, png]</label>';
                html_image += '<i class="feather icon-star-on icon-required"></i>';
                html_image += '<div class="input-group">';
                html_image += '<div class="custom-file">';
                html_image +=
                    '<input type="file" class="custom-file-input" name="multimedia[new][]" data-type_file="image">';
                html_image += '<label class="custom-file-label">Chọn hình ảnh hoặc video</label>';
                html_image += '</div>';
                html_image += '</div>';
                html_image += '<div class="preview-image hide">';
                html_image += '<img style="width: 100%" src="" alt="">';
                html_image += '</div>';
                html_image += '<p class="error-msg"></p>';
                html_image += '</div>';
                return html_image;
            }

            // Sự kiện thêm hình ảnh
            $(document).on('click', '.event-add-image', function(event) {
                event.preventDefault();
                let count = $("#images .row-input-group").length;
                $('#images').append(htmlImage(count + 1));
            });

            // Sự kiện xóa hình ảnh
            $(document).on('click', '#event-delete-image', function(event) {
                event.preventDefault();
                const productImageId = $(this).data('product_image_id');
                if (confirm("Đồng ý xóa ảnh ?") !== true) {
                    return;
                }
                if (typeof productImageId !== 'undefined') {
                    const request = $.ajax({
                        url: API_PRODUCT_IMAGE_DELETE,
                        type: "GET",
                        data: {
                            product_image_id: productImageId
                        },
                        dataType: "json"
                    });

                    request.done(function(msg) {
                        alert("Xóa hình ảnh thành công !");
                    });

                    request.fail(function(jqXHR, textStatus) {
                        alert("Xóa hình ảnh thất bại !");
                    });
                }
                // Xóa nội dung ảnh trên client
                $(this).parents('.element-image').remove();
                // Sắp xếp lại vị trí ảnh sau khi xóa
                sortLocationImage();
            });

            // Sắp xếp vị trí ảnh
            function sortLocationImage() {
                $("#images .element-image").each(function(index, element) {
                    $(this).find("label.text-label").text('Hình ảnh sản phẩm ' + (index + 1) +
                        ' [jpg, png]')
                });
            }

            // Lấy đuôi file
            function extensionFile(nameFile) {
                return nameFile.split('.').pop().toLowerCase();
            }

            // =========== Sự kiện thay đổi ảnh ===========
            $(document).on('change', 'input[type=file]', function(event) {
                event.preventDefault();
                let typeFile = $(this).data('type_file');
                switch (typeFile) {
                    case IMAGE:
                        try {
                            let files = event.target.files[0];
                            let extension = extensionFile(files.name);
                            if (!MIME_TYPE_IMAGE.includes(files.type) || !EXTENSION_IMAGE.includes(
                                    extension)) {
                                throw 'Hình ảnh được yêu cầu là: JPG, PNG';
                            }
                            let pathFile = URL.createObjectURL(files);
                            let preview = $(this).parent().find('.preview-image');
                            let btnDelete = $(this).parent().find('.event-delete-image');
                            preview.find('img').attr('src', pathFile);
                            preview.removeClass('hide');
                            btnDelete.removeClass('hide');
                        } catch (error) {
                            let htmlError = $(this).parent().find('.error-msg');
                            htmlError.text(error);
                        }
                        break;
                    default:
                        break;
                }
            });
        });
    </script>
@endsection
