import { get, post } from '@/api/axios'
import { z } from 'zod'
import { user } from '@/api/user'

export * from './pagination'
export * from './repository'
export * from './package'
export * from './source'
export * from './user'
export * from './deploy-token'
export * from './personal-token'

export const version = z.object({
    id: z.coerce.string(),
    name: z.string(),
})

export const dashboard = z.object({
    packages: z.number().optional(),
    repositories: z.number().optional(),
    users: z.number().optional(),
    tokens: z.number().optional(),
    sources: z.number().optional(),
    downloads: z.number(),
})

export function fetchDashboard() {
    return get(dashboard, '/dashboard')
}

export const loginInput = z.object({
    email: z.string(),
    password: z.string(),
})

export type LoginInput = z.infer<typeof loginInput>
export function login(input: LoginInput) {
    return post(user, '/login', input)
}

export function logout() {
    return post(z.string(), '/logout', {})
}
