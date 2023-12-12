<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left text-sm font-light">
            <thead class="border-b font-medium dark:border-neutral-500">
              <tr>
                <th scope="col" class="px-6 py-4">number</th>
                <th scope="col" class="px-6 py-4">judul</th>
                <th scope="col" class="px-6 py-4">pengarang</th>
                <th scope="col" class="px-6 py-4">tahun</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($books as $book)
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $book->id }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $book->title }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $book->author }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $book->year }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="title-tambah">
    <h1 class="text-[5vw] mt-[7vw]">Tambah Buku</h1>
    <button class="btn btn-blue bg-black text-white">
        <a href="/create">Tambah Buku</a>
    </button>
  </div>
</body>
</html>