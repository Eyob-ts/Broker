import { Head } from '@inertiajs/react';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Badge } from '@/components/ui/badge';
import { Button } from '@/components/ui/button';
import { route } from 'ziggy-js';
import { Link } from '@inertiajs/react';

interface DashboardProps {
    auth: {
        user: {
            name: string;
            email: string;
            role: string;
        };
    };
}

export default function Dashboard({ auth }: DashboardProps) {
    const { user } = auth;

    return (
        <>
            <Head title="Dashboard" />
            <div className="space-y-6">
                <div>
                    <h1 className="text-3xl font-bold">Dashboard</h1>
                    <p className="text-muted-foreground">
                        Welcome back, {user.name}! You are logged in as{' '}
                        <Badge variant="secondary">{user.role}</Badge>
                    </p>
                </div>

                <div className="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                    <Card>
                        <CardHeader>
                            <CardTitle>Profile</CardTitle>
                            <CardDescription>Manage your account settings</CardDescription>
                        </CardHeader>
                        <CardContent>
                            <Button asChild>
                                <Link href={route('profile.edit')}>Edit Profile</Link>
                            </Button>
                        </CardContent>
                    </Card>

                    {user.role === 'admin' && (
                        <Card>
                            <CardHeader>
                                <CardTitle>Admin Panel</CardTitle>
                                <CardDescription>Administrative functions</CardDescription>
                            </CardHeader>
                            <CardContent>
                                <Button asChild>
                                    <Link href={route('admin.dashboard')}>Admin Dashboard</Link>
                                </Button>
                            </CardContent>
                        </Card>
                    )}

                    {(user.role === 'admin' || user.role === 'editor') && (
                        <Card>
                            <CardHeader>
                                <CardTitle>Editor Panel</CardTitle>
                                <CardDescription>Content management</CardDescription>
                            </CardHeader>
                            <CardContent>
                                <Button asChild>
                                    <Link href={route('editor.dashboard')}>Editor Dashboard</Link>
                                </Button>
                            </CardContent>
                        </Card>
                    )}
                </div>
            </div>
        </>
    );
}
