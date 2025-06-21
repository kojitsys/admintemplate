import js from '@eslint/js'
import vue from 'eslint-plugin-vue'

export default [
  js.configs.recommended,
  ...vue.configs['flat/base'],
  {
    ignores: ['**/dist/**', '**/coverage/**'],
  },
]
