<template>
  <AdminLayout>
    <PageBreadcrumb :page-title="currentPageTitle" />
    <div class="space-y-5 sm:space-y-6">
      <ComponentCard title="Primary Button">
        <div class="flex items-center gap-5">
          <Button
            size="sm"
            variant="primary"
          >
            Button Text
          </Button>
          <Button
            size="md"
            variant="primary"
          >
            Button Text
          </Button>
        </div>
      </ComponentCard>
      <ComponentCard title="Primary Button with Left Icon">
        <div class="flex items-center gap-5">
          <Button
            size="sm"
            variant="primary"
            :start-icon="BoxIcon"
          >
            Button Text
          </Button>
          <Button
            size="md"
            variant="primary"
            :start-icon="BoxIcon"
          >
            Button Text
          </Button>
        </div>
      </ComponentCard>
      <ComponentCard title="Primary Button with Right Icon">
        <div class="flex items-center gap-5">
          <Button
            size="sm"
            variant="primary"
            :end-icon="BoxIcon"
          >
            Button Text
          </Button>
          <Button
            size="md"
            variant="primary"
            :end-icon="BoxIcon"
          >
            Button Text
          </Button>
        </div>
      </ComponentCard>
      <ComponentCard title="Primary Button">
        <div class="flex items-center gap-5">
          <Button
            size="sm"
            variant="outline"
          >
            Button Text
          </Button>
          <Button
            size="md"
            variant="outline"
          >
            Button Text
          </Button>
        </div>
      </ComponentCard>
      <ComponentCard title="Primary Button with Left Icon">
        <div class="flex items-center gap-5">
          <Button
            size="sm"
            variant="outline"
            :start-icon="BoxIcon"
          >
            Button Text
          </Button>
          <Button
            size="md"
            variant="outline"
            :start-icon="BoxIcon"
          >
            Button Text
          </Button>
        </div>
      </ComponentCard>
      <ComponentCard title="Primary Button with Right Icon">
        <div class="flex items-center gap-5">
          <Button
            size="sm"
            variant="outline"
            :end-icon="BoxIcon"
          >
            Button Text
          </Button>
          <Button
            size="md"
            variant="outline"
            :end-icon="BoxIcon"
          >
            Button Text
          </Button>
        </div>
      </ComponentCard>
    </div>
  </AdminLayout>
</template>

<script setup>
import { ref } from 'vue'
import PageBreadcrumb from '@/components/common/PageBreadcrumb.vue'
import AdminLayout from '@/components/layout/AdminLayout.vue'
import ComponentCard from '@/components/common/ComponentCard.vue'
import Button from '@/components/ui/Button.vue'
import { BoxIcon } from '@/icons'
const currentPageTitle = ref('Buttons')
</script>

<style></style>
