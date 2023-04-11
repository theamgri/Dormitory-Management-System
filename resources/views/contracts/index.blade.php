@extends('layouts.app')

@section('content')
    <div class="container place-items-center">
        <div class="row place-items-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Contract</div>

                    <div class="panel-body place-items-center
                    ">
                        <form action="{{ route('contracts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" style="height: 3rem; width:20rem;" class="form-control block border-2  font-mono mt-1 ml-4 mb-4 p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl dark:bg-gray-100 dark:placeholder-gray-400" required>
                                   
                                </div>
                            </div>
                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div class="form-group">
                                <label for="date_issued">Contract Date Issued</label>
                                <input type="date" class="form-control block border-2  font-mono mt-1 ml-4 mb-4 p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl dark:bg-gray-100 dark:placeholder-gray-400" id="date_issued" name="date_issued" required>
                            </div>
                            <div class="form-group">
                                <label for="date_expired">Contract End Date</label>
                                <input type="date" class="form-control block border-2  font-mono mt-1 ml-4 mb-4 p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl dark:bg-gray-100 dark:placeholder-gray-400" id="date_expired" name="date_expired" required>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="file">Upload Contract</label>
                                <input type="file" class="form-control-file" id="file" name="file" required>
                            </div>
                            <button type="submit" class="btn font-mono  shadow-xl text-black bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg font-normal text-sm px-2 sm:text-center " style="background-color:#ADDDD0; height: 2.5rem; width: 10rem;">Submit</button>
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Set the file input field name based on the value of the name input field
    const nameInput = document.getElementById('name');
    const pdfInput = document.getElementById('pdf');
    nameInput.addEventListener('input', () => {
        const fileName = nameInput.value.replace(/\s+/g, '-').toLowerCase() + '.pdf';
        pdfInput.setAttribute('name', 'pdf_' + fileName);
    });
</script>
@endsection