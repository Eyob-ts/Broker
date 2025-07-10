import { Head } from '@inertiajs/react';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { route } from 'ziggy-js';
import { Link } from '@inertiajs/react';

export default function AdminDashboard() {
    return (
        <>
            <Head title="Admin Dashboard" />
            <div className="space-y-6">
                <div>
                    <h1 className="text-3xl font-bold">Admin Dashboard</h1>
                    <p className="text-muted-foreground">
                        Administrative control panel for EDB
                    </p>
                </div>

                <div className="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                    <Card>
                        <CardHeader>
                            <CardTitle>User Management</CardTitle>
                            <CardDescription>Manage system users and roles</CardDescription>
                        </CardHeader>
                        <CardContent>
                            <Button asChild>
                                <Link href={route('admin.users')}>Manage Users</Link>
                            </Button>
                        </CardContent>
                    </Card>

                    <Card>
                        <CardHeader>
                            <CardTitle>System Settings</CardTitle>
                            <CardDescription>Configure system parameters</CardDescription>
                        </CardHeader>
                        <CardContent>
                            <Button variant="outline">Configure</Button>
                        </CardContent>
                    </Card>

                    <Card>
                        <CardHeader>
                            <CardTitle>Analytics</CardTitle>
                            <CardDescription>View system statistics</CardDescription>
                        </CardHeader>
                        <CardContent>
                            <Button variant="outline">View Reports</Button>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </>
    );
}
