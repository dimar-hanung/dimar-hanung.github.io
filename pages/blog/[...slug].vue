<template>
  <main id="blog" class="flex dark:bg-slate-800 dark:text-white min-h-screen">
    <aside class="w-64 p-2">
      <ContentList path="/blog" v-slot="{ list }">
        <div
          v-for="(article, i) in list"
          :key="article._path"
          class="hover:bg-slate-700 p-2 rounded"
        >
          <h2 class="font-bold">{{ article.title }}</h2>
        </div>
      </ContentList>
    </aside>
    <article class="p-2 mt-4 w-full">
      <ContentDoc :path="$route.path" />
    </article>
  </main>
</template>

<style>
#blog h1 {
  @apply text-3xl font-bold;
}

#blog pre {
  @apply bg-slate-900 p-4 rounded;
}
</style>
